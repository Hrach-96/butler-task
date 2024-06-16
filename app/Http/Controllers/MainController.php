<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App;
use Illuminate\Support\Facades\Route;

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
        return redirect()->route('main',['lang'=>getLanguage()]);
    }
    public function change_language(Request $request)
    {
        $changeLang = $request->language;
        App::setLocale($changeLang);
        $segments = str_replace(url('/'), '', url()->previous());
        $segments = array_filter(explode('/', $segments));
        $mainWord = "";
        if(isset($segments[2])){
            $mainWord = "/". __('msg.'.getLanguageMain($segments));
        }
        array_shift($segments);
        array_unshift($segments, $changeLang);
        return redirect()->to($segments[0] . $mainWord);
    }
}
