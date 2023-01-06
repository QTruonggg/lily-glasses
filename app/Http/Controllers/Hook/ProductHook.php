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
}
