<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BannerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
    

Route::get('admin/login', [App\Http\Controllers\Admin\LoginController::class, 'showLogin'])->name('admin.showlogin');
Route::post('admin/login', [App\Http\Controllers\Admin\LoginController::class, 'login'])->name('admin.login');
Route::get('/admin/logout',[App\Http\Controllers\Admin\LoginController::class,'logout'])->name('admin.logout');


// auth manager
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/',[App\Http\Controllers\Admin\LoginController::class,'showHome'])->name('admin.showHome');

    // showDashbooard
    Route::get('/',[App\Http\Controllers\Admin\LoginController::class,'showDashboard'])->name('admin.showDashboard');


    // category ??? 
    Route::prefix('category')->group(function() {
        // get
        Route::get('list',[App\Http\Controllers\Admin\CategoryController::class,'showCategoriesList'])->name('admin.showCategoriesList');
        // post
        Route::get('create',[App\Http\Controllers\Admin\CategoryController::class,'interfaceAddCategoriesList'])->name('admin.interfaceAddCategoriesList');
        Route::post('create',[App\Http\Controllers\Admin\CategoryController::class,'addCategoriesList'])->name('admin.postCategoriesList');
        // update
        Route::get('list/{id}',[App\Http\Controllers\Admin\CategoryController::class,'updateCategoriesList'])->name('admin.updateCategoriesList');
        // delete
        Route::get('list/{id}',[App\Http\Controllers\Admin\CategoryController::class,'deleteCategoriesList'])->name('admin.deleteCategoriesList');
    });

    Route::prefix('banner')->group(function() {
        Route::get('list',[BannerController::class,'viewBannerList'])->name('admin.viewBannerList');
        Route::get('create',[BannerController::class,'createBanner'])->name('banner.create');
        Route::post('create',[BannerController::class,'storeBanner']);
        Route::get('deletebanner/{id}', [BannerController::class, 'deleteBanner'])->name('banner.delete');
    });

});
