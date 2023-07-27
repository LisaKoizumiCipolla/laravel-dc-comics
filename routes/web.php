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
Route::get('admin/comics/create', [AdminComicController::class, 'create'])->name('admin.comics.create');
Route::post('admin/comics', [AdminComicController::class, 'store'])->name('admin.comics.store');
Route::get('admin/comics/{id}', [AdminComicController::class, 'show'])->name('admin.comics.show');
Route::get('admin/comics/{id}/edit', [AdminComicController::class, 'edit'])->name('admin.comics.edit');
Route::put('admin/comics/{id}', [AdminComicController::class, 'update'])->name('admin.comics.update');