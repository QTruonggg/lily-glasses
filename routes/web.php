<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Frontend\FrontendController;

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
        Route::get('list',[BannerController::class,'viewBannerList'])->name('admin.viewBannerList');
        Route::get('create',[BannerController::class,'createBanner'])->name('banner.create');
        Route::post('create',[BannerController::class,'storeBanner']);
        Route::get('update/{id}',[BannerController::class,'getUpdateBanner'])->name('banner.getUpdate');
        Route::post('update/{id}',[BannerController::class,'updateBanner'])->name('banner.update');
        Route::get('deletebanner/{id}', [BannerController::class, 'deleteBanner'])->name('banner.delete');
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

    // introduce

    Route::prefix('introduce')->group(function() {
        // get update

        Route::get('update',[App\Http\Controllers\Admin\IntroduceController::class,'getUpdateIntroduce'])->name('get.intro');
        Route::post('update',[App\Http\Controllers\Admin\IntroduceController::class,'updateIntroduce']);
    });




    // editting
    Route::prefix('editing')->group(function () {
        Route::get('update', [App\Http\Controllers\Admin\EditProfileController::class, 'getInterfaceEdit'])->name('admin.getEditProfile');
        Route::post('update', [App\Http\Controllers\Admin\EditProfileController::class, 'updateProfile'])->name('admin.getEditProfile');
    });

    // service

    Route::prefix('service')->group(function() {
        Route::get('list',[App\Http\Controllers\Admin\CategoryController::class, 'showServiceCategory'])->name('admin.ShowServiceCategory');
         // post
        Route::get('create',[App\Http\Controllers\Admin\CategoryController::class,'getAddServiceCategory'])->name('admin.getAddServiceCategory');
        Route::post('create',[App\Http\Controllers\Admin\CategoryController::class,'addServiceCategory'])->name('admin.addServiceCategory');
        // update
        Route::get('list/update/{id}',[App\Http\Controllers\Admin\CategoryController::class,'getEditService'])->name('admin.getUpdateServiceCategory');
        Route::post('list/update/{id}',[App\Http\Controllers\Admin\CategoryController::class,'postEditService'])->name('admin.postServiceCategory');

        // delete
        Route::get('list/delete/{id}',[App\Http\Controllers\Admin\CategoryController::class,'deleteServiceCategory'])->name('admin.deleteServiceCategory');
    });

});

// frontend ....
Route::get('/',[App\Http\Controllers\Frontend\FrontendController::class, 'showHome'])->name('showhome');
Route::post('/',[App\Http\Controllers\Frontend\FrontendController::class, 'post'])->name('post');
Route::get('/gio-hang',[App\Http\Controllers\Frontend\FrontendController::class , 'showCartList'])->name('showCartList');
Route::get('/thanh-toan',[App\Http\Controllers\Frontend\FrontendController::class , 'showFormPayment'])->name('showFormPayment');
Route::post('/thanh-toan',[App\Http\Controllers\Frontend\FrontendController::class , 'postsa'])->name('showFormPayment');
Route::get('/dat-lich',[App\Http\Controllers\Frontend\FrontendController::class , 'showFormBook'])->name('showFormBook');
Route::post('/dat-lich',[App\Http\Controllers\Frontend\FrontendController::class , 'postBook'])->name('postBook');

Route::get('/cart/list',[App\Http\Controllers\Frontend\FrontendController::class , 'showCartList'])->name('showCartList');

Route::get('/san-pham/{slug}',[App\Http\Controllers\Frontend\FrontendController::class, 'showProduct'])->name('showProduct');
Route::get('/san-pham-con/{id}',[App\Http\Controllers\Frontend\FrontendController::class, 'showChildCategory'])->name('showChildCategory');
Route::get('/san-pham/chi-tiet/{id}',[App\Http\Controllers\Frontend\FrontendController::class , 'showDetailsProduct'])->name('showDetailsProduct');
Route::get('/gioi-thieu',[App\Http\Controllers\Frontend\FrontendController::class, 'introduce'])->name('introduce');
