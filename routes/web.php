<?php
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\backend\CartController;
use App\Http\Controllers\backend\DashController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\OrderController;
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

Route::get('/login-admin', [AuthController::class, 'login'])->name('login');
Route::post('/do-login', [AuthController::class, 'do_login'])->name('do.login');


Route::group(["middleware" => "auth", 'prefix' => "admin"], function () {

    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
    Route::get('/dashboard', [DashController::class, 'dashboard'])->name('dashboard');
    //User
    Route::get('/dashboard/user-list', [UserController::class, 'user'])->name('user');
    Route::get('/dashboard/add-user', [AddUserController::class, 'addUser'])->name('add.user');
    Route::post('/add-user', [AddUserController::class, 'store'])->name('store.user');
    Route::get('/edit-user/{id}', [UserController::class, 'edit'])->name('edit.user');
    Route::post('/update-user/{id}', [UserController::class, 'updateUser'])->name('update.user');
    Route::get('/delete-user/{id}', [UserController::class, 'delete'])->name('delete.user');
    //Category
    Route::get('/dashboard/category-list', [CategoryController::class, 'category'])->name('category.list');
    Route::get('/add-category', [AddCategoryController::class, 'addCategory'])->name('add.category');
    Route::post('/add-category', [AddCategoryController::class, 'store'])->name('store.category');
    Route::get('/delete-category/{id}', [CategoryController::class, 'deleteCategory'])->name('delete.Category');
    //Product List backend
    Route::get('/dashboard/product-list', [ProductListController::class, 'product'])->name('product.list');
    Route::get('/dashboard/add-product', [ProductListController::class, 'addProduct'])->name('add.product');
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
Route::group(['prefix' => ""], function () {
    Route::get('/', [HomepageController::class, 'homepage'])->name('homepage');
    //laptop page
    Route::get('/laptop', [LaptopController::class, 'laptop'])->name('laptop');
    Route::get('/products', [LaptopController::class, 'laptopView'])->name('laptop.view');
    // Route::get('/smartphone', [SmartphoneController::class, 'smartphone'])->name('smartphone');
    // Route::get('/camera', [CameraController::class, 'camera'])->name('camera');
    // Route::get('/accessories', [AccessoriesController::class, 'accessories'])->name('accessories');
    //login
    // Route::post('/singup', [AuthController::class, 'storeRegistration'])->name('registration');

    Route::post('/registration',[AuthController::class,'registration'])->name('registration');



    // // seller page
    // Route::get('/homepage/products-list', [ProductController::class, "product"])->name('view.product');
    // Route::get('/sellerhub', [SellerhubController::class, "sellerhub"])->name('sellerhub');
    // Route::get('/order-list', [SellerhubController::class, "order"])->name('order.list');
    // Route::get('/transaction-list', [SellerhubController::class, "transaction"])->name('transaction.list');



    //For Seller
    Route::get('/seller/dashboard', [DashboardController::class, 'dashboard'])->name('seller.dashboard');
    Route::get('/seller/product-list', [ProductController::class, 'product'])->name('seller.product');


});