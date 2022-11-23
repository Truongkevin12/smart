<?php

use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ProductsController;
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
Route::resource('categories', CategoriesController::class);
Route::resource('products', ProductsController::class);
Route::resource('news',NewsController::class);


// Route::get('admin/loaihang', function () {
//     return view('Admin/loaihang/index');
// });
Route::get('admin', function () {
    return view('Admin/layout/index');
});
// Route::get('admin/loaihang/danhsach', function () {
//     return view('Admin/loaihang/list');
// });
Route::get('admin/sanpham', function () {
    return view('Admin/sanpham/list');
});
Route::get('admin/tintuc', function () {
    return view('Admin/tintuc/index');
});
Route::get('login', function () {
    return view('auth/login');
});
Route::get('register', function () {
    return view('auth/register');
});
