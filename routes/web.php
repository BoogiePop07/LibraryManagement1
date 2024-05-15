<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Admin\addBookController;

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

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);


Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//sidebar route
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/book/search', [BookController::class, 'search'])->name('book.search');
Route::get('/book/return', [BookController::class, 'return'])->name('book.return');
Route::get('/payment', [PaymentController::class, 'index'])->name('payment');
Route::get('/history', [HistoryController::class, 'index'])->name('history');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/admin/add',[addBookController::class,'viewAdd']);
Route::post('/admin/add',[addBookController::class,'addBook'])->name('admin.add');