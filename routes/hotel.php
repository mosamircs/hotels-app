<?php
use App\Http\Controllers\HotelController;
use Illuminate\Support\Facades\Route;

// Admin-only routes
Route::middleware('auth')->group(function () {

    Route::get('/', function () {
        return view('index');
    })->middleware(['auth'])->name('index');


    Route::get('/index', function () {
        return view('index');
    })->middleware(['auth'])->name('index');

Route::get('/hotels',[HotelController::class,"index"])->name('hotels');

Route::get('/reserveroom',[HotelController::class,"reserveroom"])->name('reserveroom');

Route::post('/index',[HotelController::class,"index"])->name('index');

});
?>
