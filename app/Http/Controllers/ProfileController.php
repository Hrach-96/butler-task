<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    protected $layoutFolder = "pages.main";
    public function index(){
        return view("{$this->layoutFolder}.profile");
    }
    public function bookings(){
        return view("{$this->layoutFolder}.bookings");
    }
    public function credits(){
        return view("{$this->layoutFolder}.credits");
    }
    public function referrals(){
        return view("{$this->layoutFolder}.referrals");
    }
    public function payment_methods(){
        return view("{$this->layoutFolder}.payment_methods");
    }
    public function add_new_card(){
        return view("{$this->layoutFolder}.add_new_card");
    }
}
