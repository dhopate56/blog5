<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admincontroller;



Route::get('/home', [Admincontroller::class, 'index'])->name('home');

Route::get('/', [Admincontroller::class, 'homepage'])->name('homepage');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
