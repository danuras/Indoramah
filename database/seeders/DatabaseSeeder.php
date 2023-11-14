<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Advantage;
use App\Models\AdvantageContent;
use App\Models\Blog;
use App\Models\Card;
use App\Models\CardBox;
use App\Models\CardType;
use App\Models\CompanyProfile;
use App\Models\Contact;
use App\Models\ContentType;
use App\Models\OrderFlow;
use App\Models\SocialMedia;
use App\Models\Testimony;
use App\Models\User;
use App\Models\WebAttribute;
use App\Models\WebContent;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $u = User::factory()->create([
            'email' => 'a@a',
            'password' => Hash::make('password'),
            'is_primary' => true,
        ]);
        WebAttribute::factory()->create();
        CompanyProfile::factory()->create();
        OrderFlow::factory()->count(5)->create();

        // Section 1
        $cb = CardBox::factory()->create([
            'card_type' => 'card-1',
        ]);
        $wc = WebContent::factory()->create([
            'content_type' => 'card',
            'card_box_id' => $cb->id,
            'rank' => 1,
        ]);
        Card::factory()->count(10)->create([
            'text' => '<b>Proyek:</b>
            <p>Nama Proyek</p>
            <br>
            <b>Lokasi:</b>
            <p>Nama Lokasi</p>
            <br>
            <b>Produk terinstall:</b>
            <p>produk-1</p>
            <p>produk-2</p>
            <p>produk-3</p>',
            'image_url' => 'images/demo/gallery/01.png',
            'title' => null,
            'is_clickable' => false,
            'content_type' => null,
            'link' => 'https://youtu.be/D0UnqGm_miA?si=D6-iTD8XRNNYgRzb',
            'card_box_id' => $cb->id,
        ]);


        // Section 2
        WebContent::factory()->create([
            'content_type' => 'advantage',
            'rank' => 2,
        ]);
        Advantage::factory()->create();
        AdvantageContent::factory()->count(10)->create();

        // Section 3
        $cb = CardBox::factory()->create([
            'card_type' => 'card-2',
        ]);
        $wc = WebContent::factory()->create([
            'content_type' => 'card',
            'card_box_id' => $cb->id,
            'rank' => 3,
        ]);
        for ($i = 0; $i < 7; $i++) {
            $type = (mt_rand(0, 1) == 0) ? 'content-1' : 'content-2';
            if ($type == 'content-1') {
                $c = Card::factory()->create([
                    'image_url' => 'images/demo/gallery/02.png',
                    'link' => null,
                    'text' => null,
                    'is_clickable' => true,
                    'content_type' => $type,
                    'card_box_id' => $cb->id,
                ]);

                $ct = CardType::factory()->create([
                    'images' => json_encode([
                        'images/demo/gallery/02.png',
                        'images/demo/gallery/02.png',
                        'images/demo/gallery/02.png',
                    ]),
                    'card_id' => $c->id,
                ]);
                ContentType::factory()->count(20)->create([
                    'card_type_id' => $ct->id,

                    'text' => '<div class = "w-100 text-left">
                    <b>Judul</b>
                    <p>informasi-1</p>
                    <p>informasi-2</p>
                    <p>informasi-3</p>
                </div>',
                ]);
            } else {
                $c = Card::factory()->create([
                    'image_url' => 'images/demo/gallery/02.png',
                    'text' => null,
                    'content_type' => $type,
                    'link' => null,
                    'is_clickable' => true,
                    'card_box_id' => $cb->id,
                ]);

                $ct = CardType::factory()->create([
                    'text' => null,
                    'images' => null,
                    'card_id' => $c->id,
                ]);
                ContentType::factory()->count(20)->create([
                    'image_url' => null,
                    'text' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, error.</p>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptatem numquam voluptates
                        esse facilis aperiam aspernatur sunt quia, odit enim?</p>',
                    'card_type_id' => $ct->id,

                ]);
            }
        }

        // Section 4
        $cb = CardBox::factory()->create([
            'card_type' => 'card-3',
        ]);
        $wc = WebContent::factory()->create([
            'content_type' => 'card',
            'card_box_id' => $cb->id,
            'rank' => 4,
        ]);
        Card::factory()->count(22)->create([
            'text' => null,
            'is_clickable' => false,
            'link' => null,
            'content_type' => null,
            'card_box_id' => $cb->id,
        ]);

        // Section 5
        $wc = WebContent::factory()->create([
            'content_type' => 'testimony',
            'card_box_id' => null,
            'rank' => 5,
        ]);
        Testimony::factory()->count(4)->create();

        // Section 6
        $wc = WebContent::factory()->create([
            'content_type' => 'blog',
            'card_box_id' => null,
            'rank' => 6,
        ]);
        Blog::factory()->count(10)->create();

        // section 7
        $wc = WebContent::factory()->create([
            'content_type' => 'maps',
            'card_box_id' => null,
            'rank' => 7,
        ]);
        Contact::factory()->create();

        SocialMedia::factory()->create();
    }
}
