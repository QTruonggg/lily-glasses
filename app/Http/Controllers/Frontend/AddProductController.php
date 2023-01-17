<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ShoppingCart;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;


class AddProductController extends Controller
{
    public function addCart($id,Request $request) {
        $product = Product::FindOrFail($id);
        $productColor = Product::FindOrFail($id)->load('colors');
        $request->validate([
            'color'=> 'required'
        ],
        [
            'color.required'=>'Chưa chọn màu sắc'
        ]);
        Cart::add([
            'id' => $product->id,
            'name'=>$product->name,
            'price'=>$product->current_price,
            'qty'=> $request['qty'],
            'weight' => $product-> status,
            'options' => ['thumbnail'=>$product->thumbnail,
                        'product_code'=>$product->product_code,
                        'discount'=>$product->percent_discount,
                        'color'=>$request['color'],
                        'old_price'=>$product->old_price,],
            
        ]);

        return back()->with('success', 'Thêm vào giỏ hàng thành công');

    }
    public function showCartList() {
        $productCart = Cart::content();
        return view('frontend.shopping_cart.index',compact('productCart'));
    } 
    public function deleteCart($rowId) {
        Cart::remove($rowId);
        return back()->with('success', 'Xóa sản phẩm thành công ' );
    }
}