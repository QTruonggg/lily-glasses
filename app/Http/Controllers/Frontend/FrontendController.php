<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Category;
use App\Models\ServiceCategory;
use App\Models\Product;
use App\Http\Controllers\Hook\GetCategoryHook;



class FrontendController extends Controller
{
    public function showHome(){
        $products = Product::orderBy('created_at', 'DESC')->with('colors')->take(4)->get();
        return view('frontend.home.index',compact('products'));
    }
    public function post(Request $request) {
    }
    public function showDetailsProduct($id) {

        $product = Product::FindOrFail($id);
        $products = Product::orderBy('created_at', 'DESC')->with('colors')->take(8)->get();
        return view('frontend.details_product.index', compact('product','products'));
    }
    public function showCartList() {
        return view('frontend.shopping_cart.index');
    }
    public function showFormPayment() {
        return view('frontend.form_payment.index');
    }
    public function showFormBook(Request $request) {
        return view('frontend.form_book.index');
    }
    public function showProduct( $slug){
        $pr_category = Category::where('slug',$slug)->with('childs')->get();
        return view('frontend.product.index',compact('pr_category'));
    }

    public function showChildCategory($id ,Request $request ){
        $products = Product::where('category_id',$id);
        if($request->price == 'desc'){
            $products = $products->orderBy('current_price','DESC');
            
        }
        if($request->price == 'asc'){
            $products = $products->orderBy('current_price','ASC');
            
        }
        if($request->created_at == 'desc'){
            $products = $products->orderBy('created_at','DESC');
            
        }
        if($request->created_at == 'asc'){
            $products = $products->orderBy('created_at','ASC');
            
        }
        if($request->material == 'plastic'){
            $products= $products->where('material','=','plastic');
        }
        $products = $products->get();
        $product_child = Category::find($id)->load('productChilds');
        $pr_category = $product_child->parent()->with('childs')->get();
        return view('frontend.product_childs.index',compact('product_child','pr_category'));
    }
    public function postsa(Request $request){
        dd($request->all());
        $pr_category = Category::where('slug',$slug)->with('childs')->get();
        return view('frontend.product.index',compact('pr_category'));
    }
    public function introduce() {
        return view('frontend.introduce.index');
    }
}