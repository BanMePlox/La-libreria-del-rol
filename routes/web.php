<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\SystemController;
use App\Http\Controllers\ArticleController;

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

Route::get('/admin', function () {
    return view('admin/index');
})->name('admin');

Route::get('/adminusers', function () {
    return view('admin/users');
})->name('adminusers');

Route::get('/adminlibros', function () {
    return view('admin/libros');
})->name('adminlibros');

Route::get('/adminsistemas', function () {
    return view('admin/sistemas');
})->name('adminsistemas');

Route::get('/adminnoticias', function () {
    return view('admin/noticias');
})->name('adminnoticias');






Route::get('delete/{id}', [SystemController::class, 'destroy']);
Route::get('deletebook/{id}', [BookController::class, 'destroy']);
Route::get('deletearticle/{id}', [ArticleController::class, 'destroy']);
Route::post('edit', [SystemController::class, 'update']);

Route::resource('systems', SystemController::class)->names([
    'index' => 'sistemas'
]);
Route::resource('books', BookController::class);
Route::resource('articles', ArticleController::class);
