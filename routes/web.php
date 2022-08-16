<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TemplateController;
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

/*Route::get('/', function () {
    return view('welcome');
}); */

Route::get('list',[ProductController::class,'index']);
Route::get('add-product',[ProductController::class,'addProduct']);
Route::post('save-product',[ProductController::class,'saveProduct']);

Route::get('update/{productid}',[ProductController::class,'editProduct']);
Route::post('update-product',[ProductController::class,'updateProduct']);

Route::get('delete/{id}',[ProductController::class,'deleteProduct']);

Route::get('/',[TemplateController::class,'index']);
Route::get('/admin',[AdminController::class,'index']);