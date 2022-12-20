<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\backend\CartController;
use App\Http\Controllers\backend\DashController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\frontend\AuthController;
use App\Http\Controllers\backend\AddUserController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\frontend\CameraController;
use App\Http\Controllers\frontend\LaptopController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\frontend\HomepageController;
use App\Http\Controllers\backend\AddProductController;
use App\Http\Controllers\backend\AddCategoryController;
use App\Http\Controllers\backend\TransactionController;
use App\Http\Controllers\frontend\SmartphoneController;
use App\Http\Controllers\frontend\AccessoriesController;


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
Route::get('/dashboard', [DashController::class, 'dashboard'])->name('dashboard');

//User
Route::get('/user-list',[UserController::class,'user'])->name('user');
Route::get('/add-user',[AddUserController::class,'addUser'])->name('add.user');
Route::post('/add-user',[AddUserController::class,'store'])->name('store.user');
Route::get('/edit-user/{id}',[UserController::class,'edit'])->name('edit.user');
Route::post('/update-user/{id}',[UserController::class,'updateUser'])->name('update.user');
Route::get('/delete-user/{id}',[UserController::class,'delete'])->name('delete.user');

//Category
Route::get('/category-list',[CategoryController::class,'category'])->name('category.list');
Route::get('/add-category',[AddCategoryController::class,'addCategory'])->name('add.category');
Route::post('/add-category',[AddCategoryController::class,'store'])->name('store.category');
Route::get('/delete-category/{id}',[CategoryController::class,'deleteCategory'])->name('delete.Category');

//Product
Route::get('/product-list',[ProductController::class,'product'])->name('product');
Route::get('/add-product',[AddProductController::class,'addproduct'])->name('add.product');
Route::post('/add-product',[AddProductController::class,'store'])->name('store.product');
Route::get('/delete-product/{id}',[ProductController::class,'deleteproduct'])->name('delete.product');

//customer
Route::get('/customer',[CustomerController::class,"customer"])->name('customer');

//Order
Route::get('/order',[OrderController::class,'order'])->name('order');

//Carts
Route::get('/cart',[CartController::class,'cart'])->name('cart');

//Transactions
Route::get('',[TransactionController::class,'transaction'])->name('transaction');




// forntend
Route::get('/homepage',[HomepageController::class,'homepage'])->name('homepage');
Route::get('/laptop',[LaptopController::class,'laptop'])->name('laptop');
Route::get('/smartphone',[SmartphoneController::class,'smartphone'])->name('smartphone');
Route::get('/camera',[CameraController::class,'camera'])->name('camera');
Route::get('/accessories',[AccessoriesController::class,'accessories'])->name('accessories');

Route::get('/homepage/login',[AuthController::class,'login'])->name('login');
Route::get('/homepage/register',[AuthController::class,'register'])->name('register');
Route::post('/homepage/register',[AuthController::class,'signup'])->name('signup');




