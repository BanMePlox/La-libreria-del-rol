<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\SystemController;

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

Route::get('/welcome', function () {
    return view('welcome');
    })->name('welcome');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', function () {
    return view('pages/main');
    })->name('main');




Route::get('delete/{id}',[SystemController::class,'destroy']);
Route::get('deletebook/{id}',[BookController::class,'destroy']);
Route::post('edit',[SystemController::class,'update']);
Route::resource('systems', SystemController::class);
Route::resource('books', BookController::class);

Route::get('/systems', function() {
    return view('systems.index');
})->name('sistemas');
