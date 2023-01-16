<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{




    public function createBlog(){
        return view('backend.blog.create', 
        ['title'=>'Thêm Blog']
        );
    }
}
