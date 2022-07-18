<?php

use App\Http\Controllers\InventoryController;
use App\Http\Controllers\LoginController;
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

Route::get('/dashboard', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});

Route::get('/input', [InventoryController::class,'index'])->name('input');
Route::get('/datatable', [InventoryController::class,'data'])->name('datatable');
Route::post('/insert', [InventoryController::class,'insert'])->name('insert');
// edit
Route::get('/edit/{id}', [InventoryController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [InventoryController::class, 'update'])->name('update');

// delete
Route::get('/delete/{id}', [InventoryController::class, 'delete'])->name('delete');
// Route::get('/delete/{id}', [InventoryController::class, 'delete'])->name('delete');

//details
Route::get('/details/{id}', [InventoryController::class, 'details'])->name('details');
// Login
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
// Register
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');

// Route::get('', [InventoryController::class, ''])->name('');