<?php

use GuzzleHttp\Middleware;
use App\Models\DashboardProfile;
use App\Http\Controllers\DashHome;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\DashboardProfileController;

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
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/home', [HomesController::class,'index']);

Route::get('/dashboard', function() {
    return view ('dashboard');
})->middleware('auth');

Route::get('/profile', [ProfileController::class,'index']);
Route::get('/DashboardProfile', [DashboardProfileController::class, 'index']);

Route::get('/contact', [ProfileController::class,'test_index']);

Route::get('/DashboardProduct', [DashboardProductController::class,'index']);

// route::resource('/DashboardProduct', DashboardProductController::class);
route::resource('/dashboard/product', DashboardController::class)->middleware('auth');
// Route::resource('/dashboard/product', DashboardController::class)->scoped([
//     'dashboardproducts' => 'id',
// ]);



Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);

Route::get('/register', [RegisController::class,'index'])->middleware('guest');
Route::post('/register', [RegisController::class,'store']);











