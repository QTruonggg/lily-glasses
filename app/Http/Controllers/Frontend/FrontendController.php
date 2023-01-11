<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Category;



class FrontendController extends Controller
{
    public function showHome(){
        $categories = Category::where('parent_id', '=', 0)->with('childs')->get();
        $banner = Banner::all();
        return view('frontend.home.index',
        compact('banner', 'categories'));
    }
}