<?php 

namespace App\Http\Controllers\Hook;
use App\models\Product;
class ProductHook {
    public function getAll() {
        return Product::orderBy('created_at', 'DESC')->get();
    }
    public function createProduct($data) {
        return Product::create($data);
    }
    public function getCategoryStatus() {
        return Product::where('category_id','=', '1')->where('status','=','0')->get();
    }
}
