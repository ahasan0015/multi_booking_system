<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
Route::get('/', function () {
    return view('admin.pages.welcome', [
        'name'=> "Roxy",
        "country"=> "Bangladesh"
    ]);
});
Route::get('/flights', function () {
    return view('admin.pages.flights');
});

Route::get('/roles',[RoleController::class,'index'])->name('roles.index');
Route::get('/roles/{id}', [RoleController::class, 'show'])->name('role-details');
