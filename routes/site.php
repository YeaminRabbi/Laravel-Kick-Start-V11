<?php 

namespace App\Http\Controllers\Site;

use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');