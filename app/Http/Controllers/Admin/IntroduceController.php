<?php

namespace App\Http\Controllers\Admin;
use App\models\Introduce;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class IntroduceController extends Controller
{
    function getUpdateIntroduce() {
        $introduce = Introduce::all();
        return view('backend.introduce.update',['breadcrumb'=>'Chỉnh sửa giới thiệu'], compact('introduce'));
    }
    function updateIntroduce(Request $request) {
        $request->validate([
            'name'=>'required|max:2000',
            'thumbnail'=>'required|max:2000',
            'seo_title'=>'required|max:2000',
            'seo_description'=>'required|max:2000',
        ],
        [
            'name.required'=>'vui lòng nhập tên ',
            'thumbnail.required'=>'vui lòng nhập ảnh',
            'seo_title.required'=>'vui lòng nhập tiêu đề',
            'seo_description.required'=>'vui lòng nhập nội dung',
        ]
        );
        DB::table('Introduces')->update(
            [
                'name'=>$request['name'],
                'thumbnail'=>$request['thumbnail'],
                'seo_title'=>$request['seo_title'],
                'seo_description'=>$request['seo_description'],
            ]
        );
        return view('backend.introduce.update',['breadcrumb'=>'Chỉnh sửa giới thiệu']);
    }
}
