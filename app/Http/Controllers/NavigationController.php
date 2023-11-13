<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function advantage(){
        return view('pages.advantage');
    }
    public function blog() {
        return view('pages.blog');
    }
    public function companyProfile(){
        return view('pages.company-profile');
    }
    public function customer(){
        return view('pages.customer');
    }
    public function orderStep(){
        return view('pages.order-step');
    }
    public function allCard($title, $card_type){
        if($card_type == 'card-1'){
            return view('pages.');
        }
    }
    public function portfolio(){

    }
}
