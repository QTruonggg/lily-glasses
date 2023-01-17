<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Profile;
class EditProfileController extends Controller
{
    public function getEdit() {
        $profile = Profile::all();
        // dd($data);
        return view('backend.editting.editting',['breadcrumb'=>'Chỉnh sửa thông tin footer']
        , compact('profile'));
    }

    public function updateProfile(Request $request){
        $profile = Profile::all();
        $data = $request->all();
        $profile->update($data);
        return back()->with('success', 'Chỉnh sửa thành công!!!');
    }
}
