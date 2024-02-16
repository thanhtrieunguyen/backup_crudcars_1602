<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\XeController;

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

Route::get('/', function () {
    return view('welcome');
});


// Route::group(['prefix' => 'admin'], function () {
//     Route::get('/xe', [XeController::class, 'index'])->name('xe.index');
//     Route::get('/xe/create', [XeController::class, 'create'])->name('xe.create');
//     Route::post('/xe/store', [XeController::class, 'store'])->name('xe.store');
//     Route::get('/xe/edit/{id}', [XeController::class, 'edit'])->name('xe.edit');
//     Route::put('/xe/update/{id}', [XeController::class, 'update'])->name('xe.update');
//     Route::delete('/xe/destroy/{id}', [XeController::class, 'destroy'])->name('xe.destroy');
// });

Route::resource('admin/xe', XeController::class)->except([
    'show'
]);