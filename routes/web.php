<?php

use App\Http\Controllers\UserAuth;
use Illuminate\Support\Facades\Route;

Route:: view('/', 'auth.login')->middleware('guest')->name('login');
Route:: post('/', [UserAuth::class,'login']);

Route:: view('/register', 'auth.register')->middleware('guest')->name('register');
Route:: post('/register', [UserAuth::class,'register'])->middleware('guest');

Route:: view('/dashboard', 'index.dashboard')->middleware('auth')->name('dashboard');
