<?php

use App\Http\Livewire\CartComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Brand\BrandComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\Coupen\CoupenComponent;
use App\Http\Livewire\Admin\Slider\SliderComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\Brand\AddBrandComponent;
use App\Http\Livewire\User\Category\CategoryProduct;
use App\Http\Livewire\Admin\Brand\EditBrandComponent;
use App\Http\Livewire\Admin\Coupen\AddCoupenComponent;
use App\Http\Livewire\Admin\Products\ProductComponent;
use App\Http\Livewire\Admin\Slider\AddSliderComponent;
use App\Http\Livewire\Admin\Category\CategoryComponent;
use App\Http\Livewire\Admin\Coupen\EditCoupenComponent;
use App\Http\Livewire\Admin\Packsize\PackSizeComponent;
use App\Http\Livewire\Admin\Slider\EditSliderComponent;
use App\Http\Livewire\Admin\Products\AddProductComponent;
use App\Http\Livewire\Admin\Category\AddcategoryComponent;
use App\Http\Livewire\Admin\Packsize\AddPackSizeComponent;
use App\Http\Livewire\Admin\Products\TopProductsComponent;
use App\Http\Livewire\Admin\Products\ViewProductComponent;
use App\Http\Livewire\Admin\Category\EditCategoryComponent;
use App\Http\Livewire\Admin\Packsize\EditpackSizeComponent;
use App\Http\Livewire\Admin\Products\EditProductsComponent;
use App\Http\Livewire\User\ProductView\ProductViewComponent;
use App\Http\Livewire\SuperAdmin\SuperAdminDashboardComponent;
use App\Http\Livewire\Admin\Products\BestSellingProductComponent;
// use App\Http\Livewire\Admin\Packsize\packsizeComponent;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeComponent::class)->name('home');
Route::get('/shop', ShopComponent::class)->name('shop');
Route::get('/cart',CartComponent::class)->name('cart');

Route::get('/category/{category_slug}',CategoryProduct::class)->name('user.category');

Route::get('/product-view/{slug}',ProductViewComponent::class)->name('product_view');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::view('/adminLogin', 'auth.adminLogin');
//For User
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/user-dashboard', UserDashboardComponent::class)->name('user.dashboard');
});

//For Admin
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/admin-user', AdminDashboardComponent::class)->name('admin.dashboard');

    //products
    Route::get('/admin-user/products', ProductComponent::class)->name('admin.product.index');
    Route::get('/admin-user/add-products', AddProductComponent::class)->name('admin.product.add');
    Route::get('/admin-user/view-product/{slug}', ViewProductComponent::class)->name('admin.product.viewProduct');
    Route::get('/admin-user/edit-product/{product_id}', EditProductsComponent::class)->name('admin.product.edit');
    Route::get('/admin-user/top-product', TopProductsComponent::class)->name('admin.product.topProduct');
    Route::get('/admin-user/best-product', BestSellingProductComponent::class)->name('admin.product.bestProduct');
    //category
    Route::get('/admin-user/category', CategoryComponent::class)->name('admin.category');
    Route::get('/admin-user/add-category/', AddcategoryComponent::class)->name('admin.category.add');
    Route::get('/admin-user/edit-category/{category_slug}', EditCategoryComponent::class)->name('admin.category.edit');

    //brand
    Route::get('/admin-user/brand', BrandComponent::class)->name('admin.brand');
    Route::get('/admin-user/add-brand', AddBrandComponent::class)->name('admin.brand.add');
    Route::get('/admin-user/edit-brand/{brand_slug}', EditBrandComponent::class)->name('admin.brand.edit');

    //pack size
    Route::get('/admin-user/packsize', PackSizeComponent::class)->name('admin.packsize');
    Route::get('/admin-user/add-packsize', AddPackSizeComponent::class)->name('admin.packsize.add');
    Route::get('/admin-user/edit-packsize/{packsize_id}', EditpackSizeComponent::class)->name('admin.packsize.edit');

    //coupen
    Route::get('/admin-user/coupen', CoupenComponent::class)->name('admin.coupen');
    Route::get('/admin-user/add-coupens', AddCoupenComponent::class)->name('admin.coupen.add');
    Route::get('/admin-user/edit-coupen/{coupen_slug}', EditCoupenComponent::class)->name('admin.coupen.edit');

    //Slider
    Route::get('/admin-user/slider', SliderComponent::class)->name('admin.slider');
    Route::get('/admin-user/add-slider', AddSliderComponent::class)->name('admin.slider.add');
    Route::get('/admin-user/edit-slider/{slider_slug}', EditSliderComponent::class)->name('admin.slider.edit');
});

//For Super Admin
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/super-admin', SuperAdminDashboardComponent::class)->name('superAdmin.dashboard');
});
