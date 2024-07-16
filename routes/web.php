<?php

use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\UserAuth;
use Illuminate\Support\Facades\Route;

Route:: view('/login', 'auth.login')->middleware('guest')->name('login');
Route:: post('/login', [UserAuth::class,'login']);

Route:: view('/', 'index.landingpage')->name('home');

Route:: view('/register', 'auth.register')->middleware('guest')->name('register');
Route:: post('/register', [UserAuth::class,'register'])->middleware('guest');

Route::post('/logout', [UserAuth::class, 'logout'] )->name('logout');

Route:: view('/dashboard', [AdminDashboard::class, 'index'])->middleware('admin' )->name('dashboard');

Route:: view('/rooms', 'pages.RoomList')->name('rooms');
