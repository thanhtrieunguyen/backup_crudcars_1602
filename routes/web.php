<?php

use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DongXeController;
use App\Http\Controllers\GiaoDichController;
use App\Http\Controllers\HangXeController;
use App\Http\Controllers\HoaDonController;
use App\Http\Controllers\TaiKhoanController;
use App\Http\Middleware\LoginMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\XeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageAdminController;
use App\Http\Controllers\LoginGoogleController;
use App\Http\Controllers\HelloController;

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

Route::get('dangnhap', [PageController::class, 'getDangNhap'])->name('pages.dangnhap')->middleware(LoginMiddleware::class);
Route::post('dangnhap', [AuthController::class, 'postDangNhap'])->name('auth.dangnhap');

//Login Google
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::controller(LoginGoogleController::class)->group(function () {
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});

Route::get('dangky', [PageController::class, 'getDangKy'])->name('pages.dangky');
Route::post('dangky', [AuthController::class, 'postDangKy'])->name('auth.dangky');

Route::post('dangxuat', [AuthController::class, 'postDangXuat'])->name('auth.dangxuat');

Route::get('/verify-account/{email}', [AuthController::class, 'verify'])->name('account.verify');

Route::get('thuexe', [PageController::class, 'getThueXe'])->name('pages.thuexe');

Route::get('filter', [XeController::class, 'filter'])->name('filter');

Route::post('capnhatprofile', [AuthController::class, 'updateProfile'])->name('auth.update');

Route::get('trangcanhan', [PageController::class, 'getTrangCaNhan'])->middleware('user')->name('pages.trangcanhan');

Route::get('chitietxe/{id}', [XeController::class, 'show'])->name('xe.show');

Route::post('xac-nhan-dat-xe', [GiaoDichController::class, 'ajaxDatXe']);

Route::get('timkiem', [PageController::class, 'timKiem'])->name('pages.timkiem');

Route::get('about', [PageController::class, 'getAbout'])->name('pages.about');
Route::get('contact', [PageController::class, 'getContact'])->name('pages.contact');

Route::get('blog', [PageController::class, 'getBlog'])->name('pages.blog');

Route::get('dulich', [PageController::class, 'getDulich'])->name('pages.dulich');

Route::post('comment/{id}', [CommentController::class, 'postComment'])->name('comments');
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
    Route::get('/thongke', [PageAdminController::class, 'getThongKe'])->name('admin.thongke');
    Route::resource('/xe', XeController::class)->except(['show']);
    Route::resource('/user', TaiKhoanController::class);
    Route::resource('/dongxe', DongXeController::class);
    Route::resource('/hangxe', HangXeController::class);
    Route::resource('/giaodich', GiaoDichController::class);
    Route::resource('/hoadon', HoaDonController::class);
    Route::get('/getall-xe', [XeController::class, 'getAllXe'])->name('getall-xe');
    Route::get('/getbien-so-xe', [XeController::class, 'getBienSoXe'])->name('getbien-so-xe');
    Route::get('get-cccd', [TaiKhoanController::class, 'getCCCD'])->name('getcccd');
    Route::get('/get-don-gia', [XeController::class, 'getDonGia'])->name('get-don-gia');
    Route::post('update-tinh-trang-giao-dich', [GiaoDichController::class, 'updateTinhTrang'])->name('giaodich.update-tinh-trang');
    Route::post('update-tinh-trang-hoa-don', [HoaDonController::class, 'updateTinhTrang'])->name('hoadon.update-tinh-trang');
});

Route::get('thanhtoan/{id}', [PageController::class, 'getTrangThanhToan'])->name('pages.thanhtoan');
Route::post('/vnpay', [CheckOutController::class, 'initPayment'])->name('vnpay');
Route::get('/vnpay-return', [CheckOutController::class, 'handlePaymentReturn'])->name('vnpay.return');

//THÔNG BÁO
Route::get('/success', function () {
    $message = session('message');
    return view('pages.success', compact('message'));
})->name('success');

Route::get('/failed', function () {
    $message = session('message');
    return view('pages.failed', compact('message'));
})->name('failed');


