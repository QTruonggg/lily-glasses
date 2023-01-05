<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Category;
use App\Http\Controllers\Hook\CategoryHook;
class CategoryController extends Controller
{
    
    public function showCategoriesList() {
        $data = Category::all();
        return view('backend.categories.list', [
            'breadcrumb'=>'Quản lý danh mục'
        ],compact('data'));
    }
    public function interfaceAddCategoriesList() {
        
        return view('backend.categories.create', [
            'breadcrumb'=>'Thêm danh mục'
        ]);
    }
    public function addCategoriesList(Request $request) {
        $data = $request->all();
        $des = $data['description'];
        
        $requi = [
            'name'        => 'required|max:255',
            'seo_title'     => 'required|max:255',
            'description' => 'max:255',
            'keyword' => 'required|max:255',
        ];
        $messages = [
            'name.required'    => 'Chưa nhập tên',
            'seo_title.required' => 'Chưa nhập tiêu đề',
            'keyword.required' => 'Chưa nhập từ khóa'
        ];
        $validate = $request->validate($requi, $messages);

        Category::create($data);
        return back()->with('success', 'Tạo mới thành công !');
    }
}
