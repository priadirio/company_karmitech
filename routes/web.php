<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('profil', ProfilController::class)->middleware('auth:sanctum');
Route::resource('hero', HeroController::class)->middleware('auth:sanctum');
Route::resource('gallery', GalleryController::class)->middleware('auth:sanctum');
Route::resource('portofolio', PortofolioController::class)->middleware('auth:sanctum');
Route::resource('blog', BlogController::class)->middleware('auth:sanctum');
Route::resource('product', ProductController::class)->middleware('auth:sanctum');
// Route::resource('blog/{slug}', BlogController::class)->middleware('auth:sanctum');
// Route::get('blog/{blog:slug}', BlogController::class);
Route::get('/', [FrontendController::class, 'index'])->name('home');
// Route::get('/blog/{blog:slug}', [FrontendController::class, 'blogDetails']);
Route::get('/blog/{blog:slug}', [BlogController::class, 'show']);
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/battery', [FrontendController::class, 'battery'])->name('battery');
Route::get('/battery-detail', [FrontendController::class, 'batteryDetail'])->name('battery-detail');
Route::get('/battery-detail121800', [FrontendController::class, 'batteryDetail128100'])->name('battery-detail121800');
Route::get('/solar', [FrontendController::class, 'solar'])->name('solar');
Route::get('/product/{product:slug}', [ProductController::class, 'show']);
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');