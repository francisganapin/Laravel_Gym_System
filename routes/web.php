<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GymMemberController;
use App\Http\Controllers\MemberLoginController;


Route::get('/', function () {
    return view('welcome');
});


Route::resource('gym-member',GymMemberController::class);


Route::get('/member-login', [MemberLoginController::class, 'showLogin'])
    ->name('member.login.form');
Route::post('/member-login', [MemberLoginController::class, 'login'])
    ->name('member.login.post');