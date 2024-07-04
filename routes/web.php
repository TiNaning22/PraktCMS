<?php

use GuzzleHttp\Middleware;
use App\Models\DashboardProfile;
use App\Http\Controllers\DashHome;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardHomeController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\DashboardProfileController;
use App\Http\Controllers\ContactController;

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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/eror404', function () {
    return view('eror404');
});

Route::get('/home', [HomesController::class,'index']);
Route::get('/', [HomesController::class,'index']);

Route::get('/dashboard', function() {
    return view ('dashboard');
})->middleware('auth');

Route::get('/product', [ProductController::class,'index']);
Route::get('/DashboardProfile', [DashboardProfileController::class, 'index']);

Route::get('/DashboardProduct', [DashboardProductController::class,'index']);
Route::get('/dashboardhome', [DashboardHomeController::class,'index']);

route::resource('/dashboard/product', DashboardController::class)->middleware('auth');
route::resource('/home', HomesController::class);

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);

Route::get('/register', [RegisController::class,'index'])->middleware('guest');
Route::post('/register', [RegisController::class,'store']);

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contactsend');









