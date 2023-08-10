<?php

use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Brand\BrandComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\Brand\AddBrandComponent;
use App\Http\Livewire\Admin\Products\ProductComponent;
use App\Http\Livewire\Admin\Category\CategoryComponent;
use App\Http\Livewire\Admin\Products\AddProductComponent;
use App\Http\Livewire\Admin\Category\AddcategoryComponent;
use App\Http\Livewire\Admin\Category\EditCategoryComponent;
use App\Http\Livewire\SuperAdmin\SuperAdminDashboardComponent;

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

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::view('/adminLogin','auth.adminLogin');
//For User
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    
    Route::get('/user-dashboard',UserDashboardComponent::class)->name('user.dashboard');
});

//For Admin
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    
    Route::get('/admin-user',AdminDashboardComponent::class)->name('admin.dashboard');

    //products
    Route::get('/admin-user/products',ProductComponent::class)->name('admin.product.index');
    Route::get('/admin-user/add-products',AddProductComponent::class)->name('admin.product.add');

    //category
    Route::get('/admin-user/category',CategoryComponent::class)->name('admin.category');
    Route::get('/admin-user/add-category/',AddcategoryComponent::class)->name('admin.category.add');
    Route::get('/admin-user/edit-category/{category_slug}',EditCategoryComponent::class)->name('admin.category.edit');

    //brand
    Route::get('/admin-user/brand',BrandComponent::class)->name('admin.brand');
    Route::get('/admin-user/add-brand',AddBrandComponent::class)->name('admin.brand.add');
});

//For Super Admin
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    
    Route::get('/super-admin',SuperAdminDashboardComponent::class)->name('superAdmin.dashboard');
});
