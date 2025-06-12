<?php

use App\Http\Controllers\FoodController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('foods', FoodController::class);
    Route::resource('customers', CustomerController::class);
    Route::resource('orders', OrderController::class);

});

//require __DIR__.'/auth.php';
