<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Product;
use App\models\ProductColor;
use App\Http\Controllers\Hook\ProductHook;
use App\Http\Controllers\Hook\CategoryHook;
use Illuminate\Support\Str;
class ProductController extends Controller

{
    public function showProductList(ProductHook $productHook) {
        $dataProduct = $productHook->getAll();
        // dd($dataProduct);
        // dd(json_decode($dataProduct[0]->color));
        $dataLenght = count($dataProduct);
        return view('backend.product.list',['breadcrumb'=>'Danh sách sản phẩm'],compact('dataProduct','dataLenght'));
    }
    public function getCreateProduct(ProductHook $productHook, CategoryHook $categoryHook) {
        $category_id =  $categoryHook->getCategoryStatus();       
        return view('backend.product.create',['breadcrumb'=>'Thêm sản phẩm'],compact('category_id'));
    }
    public function addProduct( Request $request,ProductHook $productHook) {
        $data = $request->all();
        // dd($data);
        // dd($data->name);
        foreach($data['color'] as $key => $color ){
            $colorArray[] = [
                'color'=>$color,
                'image'=>$data['imageColor'][$key],
            ];
        }
        $stringColor = json_encode($data['color']);
        $data['color']=$stringColor;
        $validate = $request->validate([
            'name'=>'required|max:255',
            'product_code'=>'required',
            'old_price'=>'required|numeric',
            'percent_discount'=>'numeric',
            'current_price'=>'required',
            'seo_description'=>'max:2000',
        ], [
            'name.required'=>'Bạn chưa nhập tên sản phẩm',
            'product_code.required'=>'Bạn chưa nhập mã sản phẩm',
            'old_price.required'=>'Bạn chưa nhập giá gốc sản phẩm',
            'old_price.numeric'=>'Vui lòng kiểm tra lại giá gốc',
            'percent_discount.numeric'=>'Vui lòng kiểm tra lại phần trăm giảm giá',
        ]);
        $model = $productHook->createProduct($data);
        $model->colors()->createMany($colorArray);
        return back()->with('success', 'Tạo thành công danh mục !');
    }
    public function deleteProduct($id, ProductHook $productHook) {
        $product =  $productHook->getId($id);
        $productHook->delete($product);
        return redirect(route('admin.showProductList'))->with('mess', 'xóa thành công danh mục');        
    }
    public function getUpdateProduct($id, CategoryHook $categoryHook) {
        $product = Product::find($id);
         $category_id =  $categoryHook->getCategoryStatus();   
        return view('backend.product.update',['breadcrumb'=>'Chỉnh sửa sản phẩm'], compact('product','category_id'));
    }

    public function updateProduct($id, Request $request) {
        $data =$request->all();
        foreach($data['color'] as $key => $color ){
            $colorArray[] = [
                'color'=>$color,
            ];
        }
        $stringColor = json_encode($data['color']);
        $data['color']=$stringColor;
        // dd($data);
        $product = Product::findOrFail($id);
        $product->update($data);
        return redirect(route('admin.showProductList')); 
    }
}
