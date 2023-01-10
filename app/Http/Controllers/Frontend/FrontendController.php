<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;


class FrontendController extends Controller
{
    public function showHome(){
        $banner = Banner::all();
        return view('frontend.home.index',
        compact('banner'));
    }
}