<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Hook\CategoryHook;

class FrontendController extends Controller
{
    public function showHome(CategoryHook $CategoryHook) {
        // $parent_categories = $CategoryHook->getParentStatus();
        return view('frontend.components.master'); 
    }
   
}