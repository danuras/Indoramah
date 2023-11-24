<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\SendEmail;
use App\Models\Advantage;
use App\Models\AdvantageContent;
use App\Models\Blog;
use App\Models\Card;
use App\Models\CardBox;
use App\Models\CardType;
use App\Models\Color;
use App\Models\CompanyProfile;
use App\Models\Contact;
use App\Models\ContentType;
use App\Models\OrderFlow;
use App\Models\SocialMedia;
use App\Models\Testimony;
use App\Models\WebAttribute;
use App\Models\WebContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NavigationController extends Controller
{
    private function getFooterOutput()
    {
        $output = [];
        if (CompanyProfile::first()) {
            $output["navigations"][] = 'company_profile';
        }
        if (OrderFlow::first()) {
            $output["navigations"][] = 'order_flow';
        }
        $output["web_attribute"] = WebAttribute::first();
        $output["contact"] = Contact::select('whatsapp', 'whatsapp_message', 'call_number', 'address', 'email')->first();
        $wcs = WebContent::orderBy('rank')->get();
        $output['social_media'] = SocialMedia::first();
        $output['color'] = Color::first();

        foreach ($wcs as $wc) {
            if ($wc->content_type == 'card') {
                $cardBox = CardBox::find($wc->card_box_id);
                $output["card_boxes"][] = $cardBox;
            } else if ($wc->content_type == 'advantage') {
                $advantage = Advantage::select('title', 'description')->first();
                if ($advantage) {
                    $output["navigations"][] = 'advantage';
                }
            } else if ($wc->content_type == 'testimony') {
                $testimonies = Testimony::get();
                if ($testimonies->isNotEmpty()) {
                    $output["navigations"][] = 'testimony';
                }
            } else if ($wc->content_type == 'blog') {
                $blogs = Blog::take(2)->get();
                if ($blogs->isNotEmpty()) {
                    $output["navigations"][] = 'blog';
                }
            } else if ($wc->content_type == 'location') {
                $location = Contact::select('info_location', 'embeded_map_url')->first();
                if ($location->embeded_map_url) {
                    $output["navigations"][] = 'location';
                }
            }
        }
        return $output;
    }
    public function home()
    {
        $output = [];
        if (CompanyProfile::first()) {
            $output["navigations"][] = 'company_profile';
        }
        if (OrderFlow::first()) {
            $output["navigations"][] = 'order_flow';
        }
        $output["web_attribute"] = WebAttribute::first();
        $output["contact"] = Contact::select('whatsapp', 'whatsapp_message', 'call_number', 'address', 'email')->first();
        $wcs = WebContent::orderBy('rank')->get();
        $output['web_contents'] = $wcs;
        $output['social_media'] = SocialMedia::first();
        $output['color'] = Color::first();


        foreach ($wcs as $wc) {
            if ($wc->content_type == 'card') {
                $cardBox = CardBox::find($wc->card_box_id);
                if ($cardBox->card_type == 'card-1') {
                    $cards = Card::select('text', 'link', 'image_url', 'content_type', 'is_clickable')->where('card_box_id', $cardBox->id)->take(3)->get();
                    $cardBox['cards'] = $cards;
                } else if ($cardBox->card_type == 'card-2') {
                    $cards = Card::select('id', 'image_url', 'title', 'content_type', 'is_clickable')->where('card_box_id', $cardBox->id)->take(8)->get();
                    $cardBox['cards'] = $cards;
                } else if ($cardBox->card_type == 'card-3') {
                    $cards = Card::select('image_url', 'title', 'content_type', 'is_clickable')->where('card_box_id', $cardBox->id)->take(8)->get();
                    $cardBox['cards'] = $cards;
                }
                $output["card_boxes"][] = $cardBox;
            } else if ($wc->content_type == 'advantage') {
                $advantage = Advantage::select('title', 'description')->first();
                if ($advantage) {
                    $output["navigations"][] = 'advantage';
                    $output['advantage'] = $advantage;
                }
            } else if ($wc->content_type == 'testimony') {
                $testimonies = Testimony::get();
                $output["navigations"][] = 'testimony';
                $output['testimonies'] = $testimonies;
            } else if ($wc->content_type == 'blog') {
                $blogs = Blog::take(2)->get();
                    $output["navigations"][] = 'blog';
                    $output['blogs'] = $blogs;
            } else if ($wc->content_type == 'maps') {
                $maps = Contact::select('info_location', 'embeded_map_url')->first();
                if ($maps->embeded_map_url) {
                    $output["navigations"][] = 'maps';
                    $output['maps'] = $maps;
                }
            }
        }

        return view('home', $output);
    }
    public function advantage()
    {
        $output = $this->getFooterOutput();
        $output['advantage'] = Advantage::select('image_url')->first();
        $output['advantage_contents'] = AdvantageContent::get();

        return view('pages.advantage', $output);
    }
    public function blog()
    {
        $output = $this->getFooterOutput();
        $output['blogs'] = Blog::paginate(4, ['*'], 'blogs');
        return view('pages.blog', $output);
    }
    public function companyProfile()
    {
        $output = $this->getFooterOutput();
        $output['company_profile'] = CompanyProfile::first();

        return view('pages.company-profile', $output);
    }
    public function cardBoxAll($title, $type, $id)
    {
        $output = $this->getFooterOutput();
        $output['title'] = $title;

        if ($type == 'card-1') {
            $output['cards'] = Card::select('text', 'link', 'image_url', 'content_type', 'is_clickable')->where('card_box_id', $id)->paginate(9, ['*'], 'cards');
            return view('pages.card-1', $output);
        } else if ($type == 'card-2') {
            $output['cards'] = Card::select('id', 'image_url', 'title', 'content_type', 'is_clickable')->where('card_box_id', $id)->paginate(16, ['*'], 'cards');
            return view('pages.card-2', $output);
        } else if ($type == 'card-3') {
            $output['cards'] = Card::select('image_url', 'title', 'content_type', 'is_clickable')->where('card_box_id', $id)->paginate(16, ['*'], 'cards');
            return view('pages.card-3', $output);
        }
    }

    public function getContent($title, $content_type, $id)
    {
        $output = $this->getFooterOutput();
        $output['title'] = $title;
        $card = Card::find($id);
        $output['card'] = $card;
        $card_type = CardType::where('card_id', $card->id)->first();
        $output['card_type'] = $card_type;



        if ($content_type == 'content-1') {
            $output['content_types'] = ContentType::select('image_url', 'title', 'text')->where('card_type_id', $card_type->id)->paginate(16, ['*'], 'content_types');
            return view('pages.contents.content-1', $output);
        } else if ($content_type == 'content-2') {
            $output['content_types'] = ContentType::select('title', 'text')->where('card_type_id', $card_type->id)->paginate(8, ['*'], 'content_types');
            return view('pages.contents.content-2', $output);
        }
    }
    public function orderStep()
    {
        $output = $this->getFooterOutput();
        $output['order_steps'] = OrderFlow::get();

        return view('pages.order-step', $output);
    }

    public function sendEmail()
    {
        $output = $this->getFooterOutput();
        $output["contact"] = Contact::select('whatsapp', 'whatsapp_message', 'call_number', 'address', 'email', 'info_contact', 'background_contact')->first();

        return view('pages.send-email', $output);
    }
}
