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
}
