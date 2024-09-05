<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\eksController;
use App\Http\Controllers\EkstrakulikulerController;

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
    return view('home');
});

Route::get('/dashboard', function () {
    return view('admin/index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('admin/create', [HomeController::class, 'index'])->middleware(['auth','admin']);

Route::middleware('auth','admin')->group(function () {
        // Route::get('admin/index', [HomeController::class, 'index']);
        Route::get('admin/index', [DataSiswaController::class, 'index'])->name('admin.index');
        Route::get('admin/create',[DataSiswaController::class, 'create'])->name('admin.create');
        Route::post('admin/store',[DataSiswaController::class, 'store'])->name('admin.store');
        Route::get('admin/edit/{id}',[DataSiswaController::class, 'edit'])->name('admin.edit');
        Route::put('admin/update/{id}',[DataSiswaController::class, 'update'])->name('admin.update');
        Route::get('admin/delete/{id}',[DataSiswaController::class, 'destroy'])->name('admin.delete');
        Route::get('admin/ekstrakurikuler', [DataSiswaController::class, 'show'])->name('admin/ekstrakurikuler');
        Route::get('admin/ekstrakurikuler', [DataSiswaController::class, 'index2'])->name('admin/ekstrakurikuler');
    Route::get('admin/ekstrakurikuler', [DataSiswaController::class, 'show2'])->name('admin/ekstrakurikuler');
});
require __DIR__.'/auth.php';

