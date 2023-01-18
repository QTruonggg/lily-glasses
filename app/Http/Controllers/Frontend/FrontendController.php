<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Order;
use App\Models\Category;
use App\Models\ServiceCategory;
use App\Models\Product;
use App\Models\Feedback;
use App\Models\Introduce;
use App\Models\Blog;
use App\Models\Appointment;
use App\Http\Controllers\Hook\GetCategoryHook;
use Gloudemans\Shoppingcart\Facades\Cart;



class FrontendController extends Controller
{
    public function showHome(){
        $feedback = Feedback::orderBy('created_at', 'DESC')->get();
        $products = Product::orderBy('created_at', 'DESC')->with('colors')->take(4)->get();
        return view('frontend.home.index',compact('products','feedback'));
    }
    public function post(Request $request) {
    }
    public function showDetailsProduct($id,$slug) {
        $product = Product::FindOrFail($id);
        $products = Product::orderBy('created_at', 'DESC')->with('colors')->get();
        return view('frontend.details_product.index', compact('product','products'));
    }
    public function showCartList() {
        return view('frontend.shopping_cart.index');
    }
    public function showFormBook(Request $request) {
        return view('frontend.form_book.index');
    }
    public function showProduct( $slug){
        $pr_category = Category::where('slug',$slug)->with('childs')->get();
        return view('frontend.product.index',compact('pr_category'));
    }
    
    public function showChildCategory($id ,Request $request ){
        $products = Product::where('category_id',$id)->where('status','=',1);
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
        $pr_category = Category::find($id)->load('productChilds')->parent()->with('childs')->get();
        return view('frontend.product_childs.index',compact('pr_category','products'));
    }
    public function introduce() {
        $feedback = Feedback::orderBy('created_at', 'DESC')->get();
        $data = Introduce::where('id','=', 1)->get();
        return view('frontend.introduce.index', ['title'=>'Giới thiệu chung'] ,compact('data','feedback'));
    }
    public function appointments(Request $request) {
        $appointment = $request->all();
        Appointment::create($appointment);
        return back()->with('success', 'Đặt lịch khám thành công');
    }
    
    // thanh toan
    public function showFormPayment($slug, $id) {
        $productCart = Cart::content();
        return view('frontend.form_payment.index', compact('productCart'));
    }


    public function sendOrder(Request $request){
        $data = $request->all();
        $request->validate([
            'name'=>'required',
            'phoneNumber'=>'required|min:10|max:10|',
            'email'=>'required|email',
            'province'=>'required',
            'district'=>'required',
            'ward'=>'required',
            'address'=>'required',
        ],[
            'name.required'=>'Vui lòng nhập đầy đủ họ tên !',
            'phoneNumber.required'=>'Vui lòng nhập số điện thoại !',
            'phoneNumber.min'=>'Vui lòng nhập đúng số điện thoại !',
            'phoneNumber.max'=>'Vui lòng nhập đúng số điện thoại !',
            'email.required'=>'Vui lòng nhập địa chỉ email !',
            'email.email'=>'Vui lòng nhập đúng địa chỉ email !',
            'province.required'=>'Vui lòng nhập tỉnh !',
            'district.required'=>'Vui lòng nhập huyện !',
            'ward.required'=>'Vui lòng nhập xã !',
            'address.required'=>'Vui lòng nhập địa chỉ cụ thể !',
        ]);
        $productRowId = $data['product_rowId'];
        $json = json_encode($productRowId);
        $data['product_rowId'] = $json;
        Order::create($data);
        return back()->with('success', 'Bạn đã đặt hàng thành công');
    }

    public function blog(){
        $blog = Blog::all();
        return view('frontend.blog.index',
        compact('blog'));
    }
}