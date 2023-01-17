<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Profile;
class EditProfileController extends Controller
{
    public function getEdit() {
        $data = Profile::all();
        // dd($data);
        return view('backend.editting.editting',['breadcrumb'=>'Chỉnh sửa thông tin chi tiết']);
    }
}
