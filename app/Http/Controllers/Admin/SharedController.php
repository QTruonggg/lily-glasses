<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shared;


class SharedController extends Controller 
{
    public function viewShared(){
        $shared = Shared::all();
        return view('backend.shared_corner.list',
        ['title'=>'Danh sách góc chia sẻ']
        , compact('shared'));
    }

    public function createShared() {
        return view('backend.shared_corner.create'
        , ['title'=>'Thêm bài chia sẻ']
        );
    }

    public function storeShared(Request $request){
        $data = $request->all();
        // dd($data);
        Shared::create($data);
        return redirect(route('shared.list'));
    }

    public function getUpdateShared($id){
        $shared_detail = Shared::findOrFail($id);
        return view('backend.shared_corner.update', 
        ['title'=>'Chỉnh sửa góc chia sẻ']
        , compact('shared_detail'));
    }

    public function updateShared(Request $request, $id){
        $shared = Shared::findOrFail($id);
        $data = $request->all();
        $shared->update($data);
        return redirect(route('shared.list'))->with('success', 'Chỉnh sửa thành công!!!');
    }

    public function deleteshared($id){
        $shared = Shared::findOrFail($id);
        $shared->delete();
        return redirect(route('shared.list'));
    }
}