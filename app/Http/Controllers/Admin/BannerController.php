<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;


class BannerController extends Controller
{
    public function viewBannerList(){
        // lấy ra toàn bộ user
        $banner = Banner::all();
        // trả về view hiển thị danh sách user
        return view('backend.banner.list',
        ['title'=>'Danh sách Banner']
        , compact('banner'));
    }
    public function createBanner(){
        return view('backend.banner.create');
    }
    public function storeBanner(Request $request){
        $imageName = time().'.'.$request->image->extension(); 
        // lưu ảnh vào file
        $request->image->move(public_path('upload'), $imageName);

        // gán dữ liệu gửi lên vào biến data
        $data = $request->all();
        $data['image'] = $imageName;
 
        // Tạo mới với các dữ liệu tương ứng với dữ liệu được gán trong $data
        Banner::create($data);
        return redirect(route('admin.viewBannerList'));
    }

    public function deletebanner($id){
        // Tìm đến đối tượng muốn xóa
        $banner = Banner::findOrFail($id);

        $banner->delete();
        return redirect(route('admin.viewBannerList'));
    }

}