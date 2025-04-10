<?php 

namespace App\Http\Controllers\Site;

use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/application/submit', [HomeController::class, 'store'])->name('application.submit');