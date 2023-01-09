<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\CartController;
use App\Http\Controllers\backend\DashController;

use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\frontend\AuthController;
use App\Http\Controllers\backend\SellerController;
use App\Http\Controllers\seller\ProductController;
use App\Http\Controllers\backend\AddUserController;
use App\Http\Controllers\frontend\CameraController;
use App\Http\Controllers\frontend\LaptopController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\seller\DashboardController;
use App\Http\Controllers\frontend\HomepageController;
use App\Http\Controllers\frontend\SellerhubController;
use App\Http\Controllers\backend\AddCategoryController;
use App\Http\Controllers\backend\ProductListController;
use App\Http\Controllers\backend\TransactionController;
use App\Http\Controllers\frontend\AddproductController;
use App\Http\Controllers\frontend\SmartphoneController;
use App\Http\Controllers\frontend\AccessoriesController;


//back-login


Route::group(["prefix" => "admin"], function () {
    //Homepage
    Route::get('/admin-login', [UserController::class, 'login'])->name('admin.login');
    Route::get('/', [DashController::class, 'dashboard'])->name('dashboard');

    //User
    Route::get('/user-list', [UserController::class, 'user'])->name('user');
    Route::get('/add-user', [AddUserController::class, 'addUser'])->name('add.user');
    Route::post('/add-user', [AddUserController::class, 'store'])->name('store.user');
    Route::get('/edit-user/{id}', [UserController::class, 'edit'])->name('edit.user');
    Route::post('/update-user/{id}', [UserController::class, 'updateUser'])->name('update.user');
    Route::get('/delete-user/{id}', [UserController::class, 'delete'])->name('delete.user');
    //Category
    Route::get('/category-list', [CategoryController::class, 'category'])->name('category.list');
    Route::get('/add-category', [AddCategoryController::class, 'addCategory'])->name('add.category');
    Route::post('/add-category', [AddCategoryController::class, 'store'])->name('store.category');
    Route::get('/delete-category/{id}', [CategoryController::class, 'deleteCategory'])->name('delete.Category');
    //Product List backend
    Route::get('/product-list', [ProductListController::class, 'product'])->name('product.list');
    //customer
    Route::get('/customer', [CustomerController::class, "customer"])->name('customer');
    //Order
    Route::get('/order', [OrderController::class, 'order'])->name('order');
    //Carts
    Route::get('/cart', [CartController::class, 'cart'])->name('cart');
    //Transactions
    Route::get('/transaction', [TransactionController::class, 'transaction'])->name('transaction');
    //seller
    Route::get('/sellers-list', [SellerController::class, 'seller'])->name('seller.list');


});





// forntend
//home-pages
Route::get('/homepage', [HomepageController::class, 'homepage'])->name('homepage');
//laptop page
Route::get('/laptop', [LaptopController::class, 'laptop'])->name('laptop');
Route::get('/products', [LaptopController::class, 'laptopView'])->name('laptop.view');
// Route::get('/smartphone', [SmartphoneController::class, 'smartphone'])->name('smartphone');
// Route::get('/camera', [CameraController::class, 'camera'])->name('camera');
// Route::get('/accessories', [AccessoriesController::class, 'accessories'])->name('accessories');

// // login
// Route::get('/homepage/login', [AuthController::class, 'login'])->name('login');
// Route::get('/homepage/register', [AuthController::class, 'register'])->name('register');
// Route::post('/homepage/register', [AuthController::class, 'signup'])->name('signup');

//login
Route::get('/signup', [AuthController::class, 'registration'])->name('auth.signin');
Route::post('/singup', [AuthController::class, 'storeRegistration'])->name('registration');

// product add in frontend
// Route::get('/add-product', [ProductController::class, 'addproduct'])->name('add.product');
// Route::post('/add-product', [ProductController::class, 'store'])->name('store.product');
// Route::get('/delete-product/{id}', [ProductController::class, 'deleteproduct'])->name('delete.product');
// Route::get('/product-add', [AddproductController::class, 'addproduct'])->name('product.add');


// // seller page
// Route::get('/homepage/products-list', [ProductController::class, "product"])->name('view.product');
// Route::get('/sellerhub', [SellerhubController::class, "sellerhub"])->name('sellerhub');
// Route::get('/order-list', [SellerhubController::class, "order"])->name('order.list');
// Route::get('/transaction-list', [SellerhubController::class, "transaction"])->name('transaction.list');



//For Seller
Route::get('/seller/dashboard', [DashboardController::class, 'dashboard'])->name('seller.dashboard');
Route::get('/seller/product-list', [ProductController::class, 'product'])->name('seller.product');