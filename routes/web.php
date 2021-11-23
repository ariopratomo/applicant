<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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


Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('admin', [HomeController::class, 'admin'])->name('admin.home')->middleware('is_admin');
Route::get('detail/{id}', [HomeController::class, 'detailApplicant'])->name('detail')->middleware('is_admin');
Route::post('update/applicant', [HomeController::class, 'updateApplicants'])->name('update.applicant');