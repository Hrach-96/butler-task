<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class MainController extends Controller
{
	protected $layoutFolder = "pages.main";
    public function index(){
        return view("{$this->layoutFolder}.home");
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('main');
    }
}
