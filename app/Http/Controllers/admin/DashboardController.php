<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $layoutFolder = "pages.admin.dashboard";
    public function index(){
        return view("{$this->layoutFolder}.index");
    }
}
