<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Product;
use App\Http\Controllers\Hook\ProductHook;
class ProductController extends Controller
{
    public function showProductList(ProductHook $productHook) {
        $dataProduct = $productHook->getAll();
        $dataLenght = count($dataProduct);
        return view('backend.product.list',['breadcrumb'=>'Danh sách sản phẩm'],compact('dataProduct','dataLenght'));
    }
    public function getCreateProduct() {
        return view('backend.product.create',['breadcrumb'=>'Thêm sản phẩm']);
    }
    public function addProduct( Request $request,ProductHook $productHook) {
        $data = $request->all();
        $stringColor = json_encode($data['color']);
        $data['color']=$stringColor;
        $productHook->createProduct($data);
        return back()->with('success', 'Tạo thành công danh mục !');
    }
}
