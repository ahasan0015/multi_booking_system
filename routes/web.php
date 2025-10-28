<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('admin.pages.welcome', [
        'name'=> "Ahasan",
        "country"=> "Bangladesh"
    ]);
});
Route::get('/flights', function () {
    return view('admin.pages.flights');
});

Route::get('/roles',[RoleController::class,'index'])->name('roles.index');
Route::get('/roles/{id}', [RoleController::class, 'show'])->name('role-details');
Route::get('/users',[UserController::class,'index'])->name('users.index');
Route::get('/users/{id}', [UserController::class, 'show'])->name('user-details');
