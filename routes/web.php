<?php

use App\Http\Controllers\StoreController;
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
Route::prefix('store')->group(function (){
    Route::get('/list', [StoreController::class, 'index'])->name('store.index');
    Route::get('/create', [StoreController::class, 'create'])->name('store.create');
    Route::post('/create', [StoreController::class, 'store']);
    Route::get('/edit/{id}', [StoreController::class, 'edit'])->name('store.edit');
    Route::post('/edit/{id}', [StoreController::class, 'update']);
    Route::get('/delete/{id}', [StoreController::class, 'delete'])->name('store.delete');
    Route::get('/search',[StoreController::class,'search'])->name('store.search');
});

