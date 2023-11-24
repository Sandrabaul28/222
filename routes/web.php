<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RecordsController;
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
    return redirect('/login');
}); 

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/logout', 'logout')->name('logout');
});

Route::prefix('dashboard')->middleware(['auth'])->group(function(){
	Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('dashboard');
});
Route::prefix('records')->middleware(['auth'])->group(function(){
	Route::get('/addRecords', [App\Http\Controllers\Admin\RecordsController::class, 'addRecords'])->name('records.addRecords');
    Route::post('/store', [App\Http\Controllers\Admin\RecordsController::class, 'store'])->name('records.store');

    Route::get('/allrecords', [App\Http\Controllers\Admin\RecordsController::class, 'allrecords'])->name('records.allrecords');
    Route::get('/view/{id}', [App\Http\Controllers\Admin\RecordsController::class, 'view'])->name('records.view');
    
});