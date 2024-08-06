<?php

namespace App\Http\Controllers;

use App\Services\RomanNumeralService;
use Illuminate\Http\Request;

class RomanNumeralsController extends Controller
{
    protected $romanNumeralService;
    public function __construct(RomanNumeralService $romanNumeralService)
    {
        $this->romanNumeralService = $romanNumeralService;
    }

    public function showForm()
    {
        return view('roman_numerals');
    }

    public function convertRomanToInt(Request $request)
    {
        $integer = $this->romanNumeralService->romanToInt($request->input('roman'));

        return redirect()->back()->with('integer', $integer)->with('romanInput', $request->input('roman'));
    }

    public function convertIntToRoman(Request $request)
    {
        $roman = $this->romanNumeralService->intToRoman($request->input('integer'));

        return redirect()->back()->with('roman', $roman)->with('integerInput', $request->input('integer'));
    }
}
