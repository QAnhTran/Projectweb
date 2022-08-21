<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProducersController;

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

// for products
Route::get('list',[ProductController::class,'index']);
Route::get('add-product',[ProductController::class,'addProduct']);
Route::post('save-product',[ProductController::class,'saveProduct']);

Route::get('update/{productid}',[ProductController::class,'editProduct']);
Route::post('update-product',[ProductController::class,'updateProduct']);

Route::get('delete/{id}',[ProductController::class,'deleteProduct']);

//for producers
Route::get('prrlist',[ProducersController::class,'prrIndex']);
Route::get('add-producer',[ProducersController::class,'addProducer']);
Route::post('save-producer',[ProducersController::class,'saveProducer']);

Route::get('updateprr/{producerid}',[ProducersController::class,'editProducer']);
Route::post('update-producer',[ProducersController::class,'updateProducer']);

Route::get('deleteprr/{id}',[ProducersController::class,'deleteProducer']);

Route::get('/',[TemplateController::class,'index']);
Route::get('/admin',[AdminController::class,'index']);