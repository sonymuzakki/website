<?php

use App\Http\Controllers\InventoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use App\Models\Inventory;
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

Route::get('#', function () { return view('welcome');})->middleware('auth');

// Route::get('/dahsboard', function () { return view('dashboard');})->middleware('auth');

Route::get('/index', function () {
    return view('index');
});
Route::get('/tes', function () {
    return view('tes');
});

Route::get('/dashboard', function () {
    return view('dashbord');
})->middleware('auth');

Route::get('/input', [InventoryController::class,'index'])->name('input')->middleware('auth');
Route::get('/datatable', [InventoryController::class,'data'])->name('datatable')->middleware('auth');
Route::post('/insert', [InventoryController::class,'insert'])->name('insert')->middleware('auth');
// edit
Route::get('/edit/{id}', [InventoryController::class, 'edit'])->name('edit')->middleware('auth');
Route::post('/update/{id}', [InventoryController::class, 'update'])->name('update')->middleware('auth');

// delete
Route::get('/delete/{id}', [InventoryController::class, 'delete'])->name('delete')->middleware('auth');
// Route::get('/delete/{id}', [InventoryController::class, 'delete'])->name('delete');

//details
Route::get('/details/{id}', [InventoryController::class, 'details'])->name('details')->middleware('auth');
// Login
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
// Register
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');
// Logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
// Route::get('', [InventoryController::class, ''])->name('');

Route::get('/user', [UsersController::class,'index'])->name('user')->middleware('auth');