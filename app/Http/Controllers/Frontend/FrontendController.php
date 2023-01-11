<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Category;
use App\Http\Controllers\Hook\GetCategoryHook;



class FrontendController extends Controller
{
    public function showHome(){
        $categories = Category::where('parent_id', '=', 0)->with('childs')->get();
        $banner = Banner::all();
        return view('frontend.home.index',
        compact('banner', 'categories'));
    }

    public function showProduct(GetCategoryHook $getCategory){
        $categories = $getCategory->getCategories();
        return view('frontend.product.index',
        compact('categories') );
    }
}