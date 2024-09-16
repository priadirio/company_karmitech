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
Route::get('/battery48', [FrontendController::class, 'battery48'])->name('battery48');
Route::get('/battery512', [FrontendController::class, 'battery512'])->name('battery512');
Route::get('/batteryess', [FrontendController::class, 'batteryess'])->name('batteryess');
Route::get('/batteryacc', [FrontendController::class, 'batteryacc'])->name('batteryacc');
Route::get('/batterycustom', [FrontendController::class, 'batterycustom'])->name('batterycustom');


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
Route::get('/battery-detail48LFP', [FrontendController::class, 'batteryDetail48LFP'])->name('battery-detail48LFP');
Route::get('/battery-detailLFP', [FrontendController::class, 'batteryDetailLFP'])->name('battery-detailLFP');
Route::get('/battery-detail512400', [FrontendController::class, 'batteryDetail512400'])->name('battery-detail512400');
Route::get('/battery-detail409', [FrontendController::class, 'batteryDetail409'])->name('battery-detail409');
Route::get('/battery-detail768', [FrontendController::class, 'batteryDetail768'])->name('battery-detail768');
Route::get('/battery-detail896', [FrontendController::class, 'batteryDetail896'])->name('battery-detail896');
Route::get('/battery-detail1331', [FrontendController::class, 'batteryDetail1331'])->name('battery-detail1331');
Route::get('/battery-detailacc1', [FrontendController::class, 'batteryDetailacc1'])->name('battery-detailacc1');
Route::get('/battery-detailacc2', [FrontendController::class, 'batteryDetailacc2'])->name('battery-detailacc2');


Route::get('/battery-detailcustom1', [FrontendController::class, 'batteryDetailcustom1'])->name('battery-detailcustom1');
Route::get('/battery-detailcustom2', [FrontendController::class, 'batteryDetailcustom2'])->name('battery-detailcustom2');
Route::get('/battery-detailcustom3', [FrontendController::class, 'batteryDetailcustom3'])->name('battery-detailcustom3');
Route::get('/battery-detailcustom4', [FrontendController::class, 'batteryDetailcustom4'])->name('battery-detailcustom4');
Route::get('/battery-detailcustom5', [FrontendController::class, 'batteryDetailcustom5'])->name('battery-detailcustom5');
Route::get('/battery-detailcustom6', [FrontendController::class, 'batteryDetailcustom6'])->name('battery-detailcustom6');

Route::get('/solar', [FrontendController::class, 'solar'])->name('solar');
Route::get('/product/{product:slug}', [ProductController::class, 'show']);
Route::get('/gallery1', [FrontendController::class, 'gallery'])->name('gallery');
Route::get('/detail', [FrontendController::class, 'detailCustom'])->name('detail');