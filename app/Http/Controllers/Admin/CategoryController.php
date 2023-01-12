<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Category;
use App\models\ServiceCategory;
use App\Http\Controllers\Hook\CategoryHook;
class CategoryController extends Controller
{
  
    public function showCategoriesList(CategoryHook $CategoryHook) {
        $data = $CategoryHook->getAll();
        // dd($data);
        $dataLenght = count($data);
        return view('backend.categories.list', [
            'breadcrumb'=>'Quản lý danh mục'
        ],compact('data','dataLenght'));
    }
    public function interfaceAddCategoriesList(CategoryHook $CategoryHook) {
        $parent_categories = $CategoryHook->getParentStatus();
        // dd($parent_categories);
        return view('backend.categories.create', [
            'breadcrumb'=>'Thêm danh mục'
        ], compact('parent_categories'));
    }
    public function addCategoriesList(Request $request,CategoryHook $CategoryHook) {
        $requi = [
            'name'        => 'required|max:255',
            'parent_id' => 'nullable',
            'thumbnail' => 'required',
            'seo_title'     => 'required|max:255',
            'seo_keyword' => 'required|max:255',
        ];
        $messages = [
            'name.required'    => 'Chưa nhập tên',
            'thumbnail.required'    => 'Chưa nhập ảnh',
            'seo_title.required' => 'Chưa nhập tiêu đề',
            'seo_keyword.required' => 'Chưa nhập từ khóa'
        ];
        $validate = $request->validate($requi, $messages);
        $CategoryHook->createCategory($validate);
        return back()->with('success', 'Tạo thành công danh mục !');
    }
    public function deleteCategoriesList($id,CategoryHook $CategoryHook) {
        $data = $CategoryHook->getId($id);
        $CategoryHook->delete($data);
        return redirect(route('admin.showCategoriesList'))->with('mess', 'xóa thành công danh mục');
    }
    public function getEdit(Request $request, $id,CategoryHook $CategoryHook) {
        $category = $CategoryHook->getId($id);
        $parent_categories = $CategoryHook->getParentStatus();
        // dd($parent_categories);
        return view('backend.categories.update',[
            'breadcrumb'=> 'Chỉnh sửa danh mục'
        ], compact('category', 'parent_categories'));
    }
    public function postEdit(Request $request,$id,CategoryHook $CategoryHook) {
        $data = $CategoryHook->getId($id);
        $CategoryHook->updateCategory($request,$data);
        return redirect(route('admin.showCategoriesList'))->with('mess', 'Cập nhật thành công danh mục');
    }


    // service category

    public function showServiceCategory() {
        $data = ServiceCategory::all();
        $dataLenght = count($data);
        return view('backend.service.list',[
            'breadcrumb'=> 'Danh sách dịch vụ'
        ],compact('data','dataLenght'));
    }
    public function getAddServiceCategory() {
        return view('backend.service.create',[
            'breadcrumb'=> 'Thêm dịch vụ'
        ]);
    }
     public function addServiceCategory(Request $request) {
        $data = $request->all();
        $validate = $request->validate([
            'name'=>'required',
            'thumbnail'=>'required'
        ],[
            'name.required'=>'Vui lòng nhập tên!!!',
            'thumbnail.required'=>'Vui lòng nhập ảnh!!!',
        ]);
        ServiceCategory::create($data);
        return back()->with('success', 'Tạo thành công danh mục dịch vụ !');
    }
     public function deleteServiceCategory($id) {
        $serviceCategory = ServiceCategory::findOrFail($id);
        $serviceCategory->delete();
        return redirect(route('admin.ShowServiceCategory'))->with('mess', 'xóa thành công danh mục');
    }
}
