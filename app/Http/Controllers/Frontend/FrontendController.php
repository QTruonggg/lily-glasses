<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Http\Controllers\Hook\CategoryHook;

class FrontendController extends Controller
{
    public function showHome(CategoryHook $CategoryHook) {
        // $parent_categories = $CategoryHook->getParentStatus();
        return view('frontend.components.master'); 
=======
use App\Models\Banner;


class FrontendController extends Controller
{
    public function showHome(){
        $banner = Banner::all();
        return view('frontend.home.index',
        compact('banner'));
>>>>>>> 1e54f4fc0dd86864ca75cdf03b4c405f8bff1e4a
    }
}