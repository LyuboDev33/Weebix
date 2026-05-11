<?php

use App\Http\Controllers\FrontEndController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontEndController::class, 'welcome']);
Route::get('/services', [FrontEndController::class, 'services']);
Route::get('/service/{service}', [FrontEndController::class, 'showServices']);

Route::get('/portfolio', [FrontEndController::class, 'portfolio']);
Route::get('/about', [FrontEndController::class, 'about']);
Route::get('/contact', [FrontEndController::class, 'contact']);


Route::fallback(function () {
    return view('404');
});
