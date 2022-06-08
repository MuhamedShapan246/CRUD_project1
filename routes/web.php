<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

Route::get('/',function (){
    return view('welcome');
});
Route::resource('products',App\Http\Controllers\ProductController::class);
Route::get('product/soft/delete/{id}',[App\Http\Controllers\ProductController::class,'softDelete'])->name('soft.delete');
Route::get('product/trash',[App\Http\Controllers\ProductController::class,'trashProducts'])->name('product.trash');
Route::get('product/back/from/trash/{id}',[App\Http\Controllers\ProductController::class,'backFromSoftDelete'])->name('product.back.from.trash');