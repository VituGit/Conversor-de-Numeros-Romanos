<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RomanNumeralsController;


Route::get('/', [RomanNumeralsController::class, 'showForm'])->name('romanNumerals');
Route::post('/convert-roman-to-int', [RomanNumeralsController::class, 'convertRomanToInt'])->name('convertRomanToInt');
Route::post('/convert-int-to-roman', [RomanNumeralsController::class, 'convertIntToRoman'])->name('convertIntToRoman');
