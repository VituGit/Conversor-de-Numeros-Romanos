<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RomanNumeralsController;

Route::post('/rti', [RomanNumeralsController::class, 'convertRomanToInt']);
Route::post('/itr', [RomanNumeralsController::class, 'convertIntToRoman']);
