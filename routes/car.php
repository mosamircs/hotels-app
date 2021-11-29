<?php

use Illuminate\Support\Facades\Route;

// Route to show all cars
Route::get('/cars',[CarController::class,'index']);

// Route to add order cars to system
Route::post('/addcars',[CarController::class, 'store']);

// Route to update the  the car order in system
Route::put('/updatecars',[CarController::class,'update']);

// Route to delete the orders in the system
Route::delete('/deletecars',[CarController::class,'destroy']);

?>
