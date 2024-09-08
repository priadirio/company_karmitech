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
Route::get('/battery256', [FrontendController::class, 'battery256'])->name('battery256');
Route::get('/battery-detail', [FrontendController::class, 'batteryDetail'])->name('battery-detail');
Route::get('/battery-detail128100', [FrontendController::class, 'batteryDetail128100'])->name('battery-detail128100');
Route::get('/battery-detail128120', [FrontendController::class, 'batteryDetail128120'])->name('battery-detail128120');
Route::get('/battery-detail128200', [FrontendController::class, 'batteryDetail128200'])->name('battery-detail128200');
Route::get('/battery-detail25650', [FrontendController::class, 'batteryDetail25650'])->name('battery-detail25650');
Route::get('/battery-detail256100', [FrontendController::class, 'batteryDetail256100'])->name('battery-detail256100');
Route::get('/battery-detail256120', [FrontendController::class, 'batteryDetail256120'])->name('battery-detail256120');
Route::get('/battery-detail256200', [FrontendController::class, 'batteryDetail256200'])->name('battery-detail256200');
Route::get('/battery-detail4850', [FrontendController::class, 'batteryDetail4850'])->name('battery-detail4850');
Route::get('/battery-detail48100', [FrontendController::class, 'batteryDetail48100'])->name('battery-detail48100');
Route::get('/battery-detail48200', [FrontendController::class, 'batteryDetail48200'])->name('battery-detail48200');
Route::get('/battery-detail512100', [FrontendController::class, 'batteryDetail512100'])->name('battery-detail512100');
Route::get('/battery-detail512150', [FrontendController::class, 'batteryDetail512150'])->name('battery-detail512150');
Route::get('/battery-detailLFP', [FrontendController::class, 'batteryDetailLFP'])->name('battery-detailLFP');
Route::get('/battery-detail512400', [FrontendController::class, 'batteryDetail512400'])->name('battery-detail512400');
Route::get('/solar', [FrontendController::class, 'solar'])->name('solar');
Route::get('/product/{product:slug}', [ProductController::class, 'show']);
Route::get('/gallery1', [FrontendController::class, 'gallery'])->name('gallery');
Route::get('/detail', [FrontendController::class, 'detailCustom'])->name('detail');