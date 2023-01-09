<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Product;
use App\Http\Controllers\Hook\ProductHook;
use App\Http\Controllers\Hook\CategoryHook;
class ProductController extends Controller
{
    public function showProductList(ProductHook $productHook) {
        $dataProduct = $productHook->getAll();
        $dataLenght = count($dataProduct);
        return view('backend.product.list',['breadcrumb'=>'Danh sách sản phẩm'],compact('dataProduct','dataLenght'));
    }
    public function getCreateProduct(ProductHook $productHook, CategoryHook $categoryHook) {
        $category_id =  $categoryHook->getCategoryStatus();       
        return view('backend.product.create',['breadcrumb'=>'Thêm sản phẩm'],compact('category_id'));
    }
    public function addProduct( Request $request,ProductHook $productHook) {
        $data = $request->all();
        $stringColor = json_encode($data['color']);
        $data['color']=$stringColor;
        $validate = $request->validate([
            'name'=>'required|max:255',
            'product_code'=>'required',
            'old_price'=>'required|numeric',
            'percent_discount'=>'numeric',
            'current_price'=>'required',
            'seo_description'=>'max:500',
        ], [
            'name.required'=>'Bạn chưa nhập tên sản phẩm',
            'product_code.required'=>'Bạn chưa nhập mã sản phẩm',
            'old_price.required'=>'Bạn chưa nhập giá gốc sản phẩm',
            'old_price.numeric'=>'Vui lòng kiểm tra lại giá gốc',
            'percent_discount.numeric'=>'Vui lòng kiểm tra lại phần trăm giảm giá',
        ]);
        $productHook->createProduct($data);
        return back()->with('success', 'Tạo thành công danh mục !');
    }
}
