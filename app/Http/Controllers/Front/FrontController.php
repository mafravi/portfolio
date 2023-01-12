<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\About;

class FrontController extends Controller
{
    public function index(){
        $home = Home::orderBy('id','desc')->first();
        $about = About::orderBy('id','desc')->first();
        return view('front.index',compact('home','about'));
      
    }
}
