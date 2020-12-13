<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;

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

Route::get('video/index', [VideoController::class, 'index'])->name('video.index');
Route::get('video/create', [VideoController::class, 'create'])->name('video.create');
Route::post('video/store', [VideoController::class, 'store'])->name('video.store');
Route::get('video/edit/{video}', [VideoController::class, 'edit'])->name('video.edit');
Route::put('video/{video}', [VideoController::class, 'update'])->name('video.update');
Route::get('video/show/{video}', [VideoController::class, 'show'])->name('video.show');
Route::delete('video/{video}', [VideoController::class, 'destroy'])->name('video.destroy');

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('welcome');
})->name('dashboard');
