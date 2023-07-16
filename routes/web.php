<?php

use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ResumeController::class, 'index'])->name('index');
Route::get('/resume/{id}', [ResumeController::class, 'view'])->name('resume.profile.view');
Route::get('/create', [ResumeController::class, 'create'])->name('resume.profile.create');
Route::post('/store', [ResumeController::class, 'store'])->name('store');
Route::post('/destroy/{id}', [ResumeController::class, 'destroy'])->name('destroy');