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
        return view('backend.banner.create', 
        ['title'=>'Danh sách Banner']
        );
    }
    public function storeBanner(Request $request){
        // gán dữ liệu gửi lên vào biến data
        $data = $request->all();
        Banner::create($data);
        return redirect(route('admin.viewBannerList'));
    }

    public function deletebanner($id){
        $banner = Banner::findOrFail($id);
        $banner->delete();
        return redirect(route('admin.viewBannerList'));
    }

}