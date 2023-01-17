<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;


class BlogController extends Controller
{
    public function BlogList(){
        $blog = Blog::all();
        return view('backend.blog.list',
        ['title'=>'Danh sách Blog']
        , compact('blog'));    
    }

    public function createBlog(){
        return view('backend.blog.create', 
        ['title'=>'Thêm Blog']
        );
    }
    public function storeBlog(Request $request){
        $data = $request->all();
        // dd($data);
        Blog::create($data);
        return redirect(route('blog.list'));
    }

    public function getUpdateBlog($id){
        $blog = Blog::findOrFail($id);
        return view('backend.blog.update', 
        ['title'=>'Chỉnh sửa Blog']
        , compact('blog'));
    }

    public function updateBlog(Request $request, $id){
        $blog = Blog::findOrFail($id);
        $data = $request->all();
        $blog->update($data);
        return redirect(route('blog.list'));
    }

    public function deleteBlog($id){
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect(route('blog.list'));
    }
}
