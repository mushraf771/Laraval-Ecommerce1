<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CouponController;
use App\Http\Controllers\Backend\ColorController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\ProductAttributeController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SizeController;
use App\Http\Controllers\Backend\TaxController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/categories', [HomeController::class, 'categories'])->name('home.categories');
Route::get('/category/{slug}', [HomeController::class, 'category'])->name('home.category');
Route::get('/category/{slug}/all', [HomeController::class, 'listcategory'])->name('home.listcategory');

// Route::get('{parent_slug}/{slug}', [HomeController::class, 'subcategory'])->name('subcategory');
// Route::get('{parent_slug}/{slug}/{id}', [HomeController::class, 'subproducts'])->name('subproducts');

// Route::get('/category/{name}/{prod}/{pr}', [HomeController::class, 'subcategories'])->name('subcategories');

// Route::get('/category/{name}/{prod}/{pr}', [HomeController::class, 'categories'])->name('categories');


Route::get('/product/{slug}', [HomeController::class, 'products'])->name('products');
// Route::get('/product/{slug}/{id}', [HomeController::class, 'products'])->name('products');
// Route::get('/product/{slug}', [HomeController::class, 'subproduct'])->name('productid');
// Route::get('/product-details',[HomeController::class,'productDetails'])->name('productDetails');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::get('/wishlist', [HomeController::class, 'wishlist'])->name('wishlist');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
// Route::get('/login',[HomeController::class,'login'])->name('login');
// Route::get('/signup',[HomeController::class,'signup'])->name('signup');

Route::group(['middleware' => 'admin_auth'], function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/category', [CategoryController::class, 'index'])->name('dashboard.category');
    Route::get('/dashboard/category/insert', [CategoryController::class, 'create'])->name('dashboard.category.create');
    Route::post('/dashboard/category/store', [CategoryController::class, 'store'])->name('dashboard.category.store');
    Route::get('/dashboard/category/edit/{id}', [CategoryController::class, 'edit'])->name('dashboard.category.edit');
    Route::put('/dashboard/category/update', [CategoryController::class, 'update'])->name('dashboard.category.update');
    Route::get('/dashboard/category/delete/{id}', [CategoryController::class, 'destroy'])->name('dashboard.category.destroy');
    Route::get('/dashboard/category/status/{status}/{id}', [CategoryController::class, 'status'])->name('dashboard.category.status');
    Route::get('/dashboard/category/featured/{featured}/{id}', [CategoryController::class, 'featured'])->name('dashboard.category.featured');
// coupon routes
    Route::get('/dashboard/coupon', [CouponController::class, 'index'])->name('dashboard.coupon');
    Route::get('/dashboard/coupon/insert', [CouponController::class, 'create'])->name('dashboard.coupon.create');
    Route::post('/dashboard/coupon/store', [CouponController::class, 'store'])->name('dashboard.coupon.store');
    Route::get('/dashboard/coupon/edit/{id}', [CouponController::class, 'edit'])->name('dashboard.coupon.edit');
    Route::put('/dashboard/coupon/update', [CouponController::class, 'update'])->name('dashboard.coupon.update');
    Route::get('/dashboard/coupon/delete/{id}', [CouponController::class, 'destroy'])->name('dashboard.coupon.destroy');
    Route::get('/dashboard/coupon/status/{status}/{id}', [CouponController::class, 'status'])->name('dashboard.coupon.status');
// coupon Brands
    Route::get('/dashboard/brand', [BrandController::class, 'index'])->name('dashboard.brand');
    Route::get('/dashboard/brand/insert', [BrandController::class, 'create'])->name('dashboard.brand.create');
    Route::post('/dashboard/brand/store', [BrandController::class, 'store'])->name('dashboard.brand.store');
    Route::get('/dashboard/brand/edit/{id}', [BrandController::class, 'edit'])->name('dashboard.brand.edit');
    Route::put('/dashboard/brand/update', [BrandController::class, 'update'])->name('dashboard.brand.update');
    Route::get('/dashboard/brand/delete/{id}', [BrandController::class, 'destroy'])->name('dashboard.brand.destroy');
    Route::get('/dashboard/brand/status/{status}/{id}', [BrandController::class, 'status'])->name('dashboard.brand.status');
    Route::get('/dashboard/brand/top_brand/{top_brand}/{id}', [BrandController::class, 'top_brand'])->name('dashboard.brand.top_brand');
// Size routes
    Route::get('/dashboard/size', [SizeController::class, 'index'])->name('dashboard.size');
    Route::get('/dashboard/size/insert', [SizeController::class, 'create'])->name('dashboard.size.create');
    Route::post('/dashboard/size/store', [SizeController::class, 'store'])->name('dashboard.size.store');
    Route::get('/dashboard/size/edit/{id}', [SizeController::class, 'edit'])->name('dashboard.size.edit');
    Route::put('/dashboard/size/update', [SizeController::class, 'update'])->name('dashboard.size.update');
    Route::get('/dashboard/size/delete/{id}', [SizeController::class, 'destroy'])->name('dashboard.size.destroy');
    Route::get('/dashboard/size/status/{status}/{id}', [SizeController::class, 'status'])->name('dashboard.size.status');
// Color routes
    Route::get('/dashboard/color', [ColorController::class, 'index'])->name('dashboard.color');
    Route::get('/dashboard/color/insert', [ColorController::class, 'create'])->name('dashboard.color.create');
    Route::post('/dashboard/color/store', [ColorController::class, 'store'])->name('dashboard.color.store');
    Route::get('/dashboard/color/edit/{id}', [ColorController::class, 'edit'])->name('dashboard.color.edit');
    Route::put('/dashboard/color/update', [ColorController::class, 'update'])->name('dashboard.color.update');
    Route::get('/dashboard/color/delete/{id}', [ColorController::class, 'destroy'])->name('dashboard.color.destroy');
    Route::get('/dashboard/color/status/{status}/{id}', [ColorController::class, 'status'])->name('dashboard.color.status');
// tax routes
    Route::get('/dashboard/tax', [TaxController::class, 'index'])->name('dashboard.tax');
    Route::get('/dashboard/tax/insert', [TaxController::class, 'create'])->name('dashboard.tax.create');
    Route::post('/dashboard/tax/store', [TaxController::class, 'store'])->name('dashboard.tax.store');
    Route::get('/dashboard/tax/edit/{id}', [TaxController::class, 'edit'])->name('dashboard.tax.edit');
    Route::put('/dashboard/tax/update', [TaxController::class, 'update'])->name('dashboard.tax.update');
    Route::get('/dashboard/tax/delete/{id}', [TaxController::class, 'destroy'])->name('dashboard.tax.destroy');
    Route::get('/dashboard/tax/status/{status}/{id}', [TaxController::class, 'status'])->name('dashboard.tax.status');
// Products routes
    Route::get('/dashboard/product', [ProductController::class, 'index'])->name('dashboard.product');
    Route::get('/dashboard/product/insert', [ProductController::class, 'create'])->name('dashboard.product.create');
    Route::post('/dashboard/product/store', [ProductController::class, 'store'])->name('dashboard.product.store');
    Route::get('/dashboard/product/edit/{id}', [ProductController::class, 'edit'])->name('dashboard.product.edit');
    Route::put('/dashboard/product/update', [ProductController::class, 'update'])->name('dashboard.product.update');
    Route::get('/dashboard/product/delete/{id}', [ProductController::class, 'destroy'])->name('dashboard.product.destroy');
    Route::get('/dashboard/product/status/{status}/{id}', [ProductController::class, 'status'])->name('dashboard.product.status');
    Route::get('/dashboard/product/attribute/delete/{paid}/{pid}', [ProductController::class, 'attrdel'])->name('dashboard.product.attrdel');
    Route::get('/dashboard/product/image/delete/{paid}/{pid}', [ProductController::class, 'imgdel'])->name('dashboard.product.imgdel');
// Products Attributes routes
    Route::get('/dashboard/product_attributes', [ProductAttributeController::class, 'index'])->name('dashboard.product_attributes');
    Route::get('/dashboard/product_attributes/insert', [ProductAttributeController::class, 'create'])->name('dashboard.product_attributes.create');
    Route::post('/dashboard/product_attributes/store', [ProductAttributeController::class, 'store'])->name('dashboard.product_attributes.store');
    Route::get('/dashboard/product_attributes/edit/{id}', [ProductAttributeController::class, 'edit'])->name('dashboard.product_attributes.edit');
    Route::put('/dashboard/product_attributes/update', [ProductAttributeController::class, 'update'])->name('dashboard.product_attributes.update');
    Route::get('/dashboard/product_attributes/delete/{id}', [ProductAttributeController::class, 'destroy'])->name('dashboard.product_attributes.destroy');
    Route::get('/dashboard/product_attributes/status/{status}/{id}', [ProductAttributeController::class, 'status'])->name('dashboard.product_attributes.status');
// Products customer
    Route::get('/dashboard/customer', [CustomerController::class, 'index'])->name('dashboard.customer');
    Route::get('/dashboard/customer/insert', [CustomerController::class, 'create'])->name('dashboard.customer.create');
    Route::post('/dashboard/customer/store', [CustomerController::class, 'store'])->name('dashboard.customer.store');
    Route::get('/dashboard/customer/show/{id}', [CustomerController::class, 'show'])->name('dashboard.customer.show');
    Route::get('/dashboard/customer/status/{status}/{id}', [CustomerController::class, 'status'])->name('dashboard.customer.status');
    // logout route
    Route::get('/logout', function () {
        session()->forget('Admin_Login');
        session()->forget('Admin_id');
        session()->flash('error', 'Logout Successfully');
        return redirect('login');
    });
});

Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::get('/register', [AdminController::class, 'register'])->name('register');
// Route::post('/register', [AdminController::class, 'store'])->name('register.post');
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::post('/admin/auth', [AdminController::class, 'auth'])->name('admin.auth');
Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');
Route::get('/admin/updatepassword', [AdminController::class, 'updatePassword'])->name('admin.updatePassword');
