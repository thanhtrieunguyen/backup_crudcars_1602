<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\XeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [PageController::class, 'getHome'])->name('pages.trangchu');

Route::get('dangnhap', [PageController::class, 'getDangNhap'])->name('pages.dangnhap');
Route::post('dangnhap', [AuthController::class, 'postDangNhap'])->name('auth.dangnhap');

Route::get('dangky', [PageController::class, 'getDangKy'])->name('pages.dangky');
Route::post('dangky', [AuthController::class, 'postDangKy'])->name('auth.dangky');

Route::post('dangxuat', [AuthController::class, 'postDangXuat'])->name('auth.dangxuat');

Route::get('chitietxe/{id}', [XeController::class, 'show'])->name('xe.show');

Route::get('about', [PageController::class, 'getAbout'])->name('pages.about');
Route::get('contact', [PageController::class, 'getContact'])->name('pages.contact');
// ADMIN ROUTE
// Route::group(['prefix' => 'admin'], function () {
//     Route::get('/xe', [XeController::class, 'index'])->name('xe.index');
//     Route::get('/xe/create', [XeController::class, 'create'])->name('xe.create');
//     Route::post('/xe/store', [XeController::class, 'store'])->name('xe.store');
//     Route::get('/xe/edit/{id}', [XeController::class, 'edit'])->name('xe.edit');
//     Route::put('/xe/update/{id}', [XeController::class, 'update'])->name('xe.update');
//     Route::delete('/xe/destroy/{id}', [XeController::class, 'destroy'])->name('xe.destroy');
// });

Route::group(['prefix' => 'admin'], function () {
    Route::resource('/xe', XeController::class)->except(['show']);
});