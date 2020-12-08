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

Route::get('video/create', [VideoController::class, 'create'])->name('video.create');
Route::post('video/store', [VideoController::class, 'store'])->name('video.store');
Route::get('video/index', [VideoController::class, 'index'])->name('video.index');
Route::delete('video/destroy/{video}', [VideoController::class, 'destroy'])->name('video.destroy');
