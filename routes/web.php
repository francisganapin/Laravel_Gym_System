<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GymMemberController;
use App\Http\Controllers\MemberLoginController;


Route::get('/', function () {
    return view('welcome');
});


Route::resource('gym-member',GymMemberController::class);

Route::post('/gym-member',[GymMemberController::class,'store'])->name('gym-member.store');

Route::get('/member-login', [MemberLoginController::class, 'showLogin'])
    ->name('member.login.form');
Route::post('/member-login', [MemberLoginController::class, 'login'])
    ->name('member.login.post');

//Show form to edit expiry

Route::get('/gym-member/{member}/edit-expiry',[GymMemberController::class,'editExpiry'])->name('gym-member.edit-expiry');

//Update expiry
Route::patch('/gym-member/{member}/update-expiry',[GymMemberController::class,'updateExpiry'])->name('gym-member.update-expiry');

Route::get('/dashboard',[GymMemberController::class,'countStatistic']);