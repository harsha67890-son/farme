<?php

use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
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
});

//For Super Admin
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    
    Route::get('/super-admin',SuperAdminDashboardComponent::class)->name('superAdmin.dashboard');
});
