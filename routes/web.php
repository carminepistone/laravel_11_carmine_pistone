<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\MenuController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/contattaci', [PublicController::class, 'contattaci'])->name('contattaci');
Route::post('/contattaci', [PublicController::class, 'contactUsForm'])->name('contactUsForm');

Route::get('/menu/index', [MenuController::class, 'index'])->name('menu.index');
Route::get('/menu/create', [MenuController::class, 'create'])->name('menu.create')->middleware('auth');
Route::post('/menu/store', [MenuController::class, 'store'])->name('menu.store')->middleware('auth');
Route::get('/menu/{menu}', [MenuController::class, 'show'])->name('menu.show');
Route::get('/menu/{menu}/edit', [MenuController::class, 'edit'])->name('menu.edit')->middleware('auth');
Route::put('/menu/{menu}', [MenuController::class, 'update'])->name('menu.update')->middleware('auth');
Route::delete('/menu/{menu}', [MenuController::class, 'destroy'])->name('menu.destroy')->middleware('auth');


Route::get('/user/profile', [PublicController::class,'profile'])->name('user.profile');