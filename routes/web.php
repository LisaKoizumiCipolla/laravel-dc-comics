<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\HomeController as GuestHomeController;
use App\Http\Controllers\Guest\ComicController as GuestComicController;
use App\Http\Controllers\Admin\ComicController as AdminComicController;

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

Route::get('/', [GuestHomeController::class, 'home'])->name('homepage');
Route::get('/comics', [GuestComicController::class, 'index'])->name('guest.comics.index');
//Route::resource('admin/comics', AdminComicController::class);
Route::get('admin/comics', [AdminComicController::class, 'index'])->name('admin.comics.index');
Route::get('admin/comics/{id}', [AdminComicController::class, 'show'])->name('admin.comics.show');