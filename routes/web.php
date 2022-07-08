<?php

use App\Http\Controllers\InventoryController;
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

Route::get('/', function () {
    return view('welcome');
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

// Route::get('', [InventoryController::class, ''])->name('');