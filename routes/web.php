<?php

use App\Http\Controllers\AirlineController;
use App\Http\Controllers\FlightBookingController;
use App\Http\Controllers\FlightSearchController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Mail\RegistrationConfirmationMail;
use App\Models\Flight;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.pages.welcome', [
        'name' => 'Ahasan',
        'country' => 'Bangladesh',
    ]);
});
Route::get('/test-mail', function(){
    Mail::to('ahasanstu94@gmail.com')->send(new RegistrationConfirmationMail());
    return 'Mail Sent Successfully to Asha';
});
Route::get('/flights', function () {
    return view('admin.pages.flights.search');
});

Route::get('/hotels', function () {
    return view('admin.pages.hotels');
});
Route::get('/rent_a_car', function () {
    return view('admin.pages.rent_a_car');
});

Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');
Route::post('/roles', [RoleController::class, 'store'])->name('roles.store');
Route::get('/roles/{role}/edit', [RoleController::class, 'edit'])->name('roles.edit');
Route::patch('/roles/{id}', [RoleController::class, 'update'])->name('roles.update');
Route::get('/roles/{id}', [RoleController::class, 'show'])->name('role-details');
Route::delete('/roles/{id}', [RoleController::class, 'destroy'])->name('role-destroy');

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}', [UserController::class, 'show'])->name('user-details');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::patch('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('/airline',[AirlineController::class,'index'])->name('airlines-index');
Route::get('airline/create',[AirlineController::class,'create'])->name('airline.create');
Route::post('airline',[AirlineController::class,'store'])->name('airline.store');
Route::get('/airline/{id}',[AirlineController::class,'show'])->name('airline.show');
Route::get('/airline/{id}/edit',[AirlineController::class,'edit'])->name('airline.edit');
Route::patch('/airline/{id}',[AirlineController::class,'update'])->name('airline.update');
Route::delete('/airlines/{id}',[AirlineController::class,'destroy'])->name('airline.delete');
//flight search
Route::get('/flights', [FlightSearchController::class, 'index'])->name('flight.index');
Route::get('/flights/search', [FlightSearchController::class, 'search'])->name('flight.search');


//flight book
// Flight booking page (নতুন ট্যাবে খোলা হবে)
Route::get('/flights/{id}/book', [FlightBookingController::class, 'show'])->name('flight.book');
Route::post('/flights/{id}/book', [FlightBookingController::class, 'store'])->name('flight.book.submit');

// Route::get('test', function() {
//     $flight = Flight::find(2);

//     dd($flight->airline);
// });