<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Category;
use App\Models\ServiceCategory;
use App\Models\Product;



class FrontendController extends Controller
{
    public function showHome(){
        $categories = Category::where('parent_id', '=', 0)->with('childs')->get();
        $banner = Banner::all();
        $serviceCategory = ServiceCategory::all();
        return view('frontend.home.index',
        compact('banner', 'categories','serviceCategory'));
    }
    public function post(Request $request) {
        // dd($request->all());
    }


    public function showDetailsProduct() {
        $categories = Category::where('parent_id', '=', 0)->with('childs')->get();
        $banner = Banner::all();
        $serviceCategory = ServiceCategory::all();
        return view('frontend.details_product.index',
        compact('banner', 'categories','serviceCategory'));
    }
    public function showCartList() {
        $categories = Category::where('parent_id', '=', 0)->with('childs')->get();
        $banner = Banner::all();
        $serviceCategory = ServiceCategory::all();
        return view('frontend.shopping_cart.index',
        compact('banner', 'categories','serviceCategory'));
    }
    public function showFormPayment() {
        $categories = Category::where('parent_id', '=', 0)->with('childs')->get();
        $banner = Banner::all();
        $serviceCategory = ServiceCategory::all();
        return view('frontend.form_payment.index',
        compact('banner', 'categories','serviceCategory'));
    }
    public function showFormBook() {
        $categories = Category::where('parent_id', '=', 0)->with('childs')->get();
        $banner = Banner::all();
        $serviceCategory = ServiceCategory::all();
        return view('frontend.form_book.index',
        compact('banner', 'categories','serviceCategory'));
    }
}