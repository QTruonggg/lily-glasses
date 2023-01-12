<?php 

namespace App\Http\Controllers\Hook;
use App\models\Category;

class GetCategoryHook {
    public function getCategories() {
        return Category::where('parent_id', '=', 0)->with('childs')->get();
    }
}