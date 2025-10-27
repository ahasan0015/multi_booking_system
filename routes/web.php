<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.pages.welcome', [
        'name'=> "Roxy",
        "country"=> "Bangladesh"
    ]);
});
Route::get('/flights', function () {
    return view('admin.pages.flights');
});
