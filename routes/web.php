<?php

use Illuminate\Support\Facades\Route;

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
        Route::get('list/update/{id}',[App\Http\Controllers\Admin\CategoryController::class,'getEdit'])->name('admin.getUpdateCategoriesList');
        Route::post('list/update/{id}',[App\Http\Controllers\Admin\CategoryController::class,'postEdit'])->name('admin.postUpdateCategoriesList');

        // delete
        Route::get('list/delete/{id}',[App\Http\Controllers\Admin\CategoryController::class,'deleteCategoriesList'])->name('admin.deleteCategoriesList');
    });


    Route::prefix('banner')->group(function() {
        Route::get('list',[App\Http\Controllers\Admin\BannerController::class,'viewBannerList'])->name('admin.viewBannerList');
        Route::get('create',[App\Http\Controllers\Admin\BannerController::class,'createBanner'])->name('banner.create');
        Route::post('create',[App\Http\Controllers\Admin\BannerController::class,'storeBanner']);
        Route::get('deletebanner/{id}', [App\Http\Controllers\Admin\BannerController::class, 'deleteBanner'])->name('banner.delete');
    });

    // product ???
    Route::prefix('products')->group(function() {
        // get product
        Route::get('list', [App\Http\Controllers\Admin\ProductController::class,'showProductList'])->name('admin.showProductList');

        // post product
        Route::get('create', [App\Http\Controllers\Admin\ProductController::class,'getCreateProduct'])->name('admin.getCreateProduct');
        Route::post('create', [App\Http\Controllers\Admin\ProductController::class,'addProduct'])->name('admin.addProduct');

        // update Product
        Route::get('list/update/{id}', [App\Http\Controllers\Admin\ProductController::class,'getUpdateProduct'])->name('admin.getUpdateProduct');
        Route::post('list/update/{id}', [App\Http\Controllers\Admin\ProductController::class,'updateProduct'])->name('admin.updateProduct');

        // delete product
        Route::get('list/delete/{id}', [App\Http\Controllers\Admin\ProductController::class,'deleteProduct'])->name('admin.deleteProduct');
    });




    // editting
    Route::prefix('editing')->group(function () {
        Route::get('update', [App\Http\Controllers\Admin\EditProfileController::class, 'getInterfaceEdit'])->name('admin.getEditProfile');
        Route::post('update', [App\Http\Controllers\Admin\EditProfileController::class, 'updateProfile'])->name('admin.getEditProfile');
    });

});

// frontend ....
Route::get('/',[App\Http\Controllers\Frontend\FrontendController::class, 'showHome'])->name('showhome');