<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\AddUserController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\AddCategoryController;


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


//Homepage
Route::get('/homepage', [DashController::class, 'dashboard'])->name('dashboard');

//User
Route::get('/user-list',[UserController::class,'user'])->name('user');
Route::get('/add-user',[AddUserController::class,'addUser'])->name('add.user');
Route::post('/add-user',[AddUserController::class,'store'])->name('store.user');
Route::get('/delete-user/{id}',[AddUserController::class,'delete'])->name('delete.user.delete');

//Category
Route::get('/category-list',[CategoryController::class,'category'])->name('category.list');
Route::get('/add-category',[AddCategoryController::class,'addCategory'])->name('add.category');
Route::post('/add-category',[AddCategoryController::class,'store'])->name('store.category');

//Product
Route::get('/product-list',[ProductController::class,'product'])->name('product');




