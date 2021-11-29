<?php

use Illuminate\Support\Facades\Route;

Route::get('/flights',[HotelController::class,'index']);

Route::get('/hotels/{hotel}',[HotelController::class,"show"]);
?>
