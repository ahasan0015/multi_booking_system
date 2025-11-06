<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.pages.welcome', [
        'name' => 'Ahasan',
        'country' => 'Bangladesh',
    ]);
});
Route::get('/flights', function () {
    return view('admin.pages.flights');
});
Route::get('/hotels', function () {
    return view('admin.pages.hotels');
});
Route::get('/rent_a_car', function () {
    return view('admin.pages.rent_a_car');
});

Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
Route::get('/roles/{id}', [RoleController::class, 'show'])->name('role-details');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}', [UserController::class, 'show'])->name('user-details');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
