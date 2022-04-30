<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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
// Auth
Route::group(['prefix' => 'auth'], function() {

});

// Sign Up
Route::get('/register', [AuthController::class, 'register'])->name('register')->middleware('guest');;
Route::post('/registerForm', [AuthController::class, 'registerForm']);

// Log In
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/loginForm', [AuthController::class, 'loginForm']);

// Log Out
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/profile', [AuthController::class, 'profile'])->name('profile')->middleware('auth');

Route::post('/save', [AuthController::class, 'save'])->middleware('auth');

Route::get('/updateRole/{id}', [AuthController::class, 'updateRole'])->middleware('auth', 'auth.role:2');
Route::post('/updateRole/{id}', [AuthController::class, 'updateRoleForm'])->middleware('auth', 'auth.role:2');

Route::get('/deleteUser/{id}', [AuthController::class, 'deleteUser'])->middleware('auth', 'auth.role:2');

// Home
Route::get('/', function () {
    return view('landing');
});
// Home Auth
Route::get('/home', [HomeController::class, 'home'])->name('home')->middleware('auth');

Route::get('/Detail/{id}',[DatabaseController::class,'Detail']);

Route::get('/detail/{id}', [HomeController::class, 'detail'])->middleware('auth');

Route::get('/rent/{id}', [HomeController::class, 'rent'])->middleware('auth');

Route::get('/cart', [HomeController::class, 'cart'])->name('cart')->middleware('auth');

Route::get('/deleteCart/{id}', [HomeController::class, 'deleteCart'])->middleware('auth');

Route::get('/submit', [HomeController::class, 'submit'])->middleware('auth');

Route::get('/accountMaintenance', [HomeController::class, 'accountMaintenance'])->name('accountMaintenance')->middleware('auth', 'auth.role:2');

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});
