<?php

namespace App\Http\Controllers;

use App\Models\Banks;
use App\Models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function currency(){
        $allbank = Banks::all()->all();
        $allcur = Currency::all()->all();
        return view('currency',compact('allcur','allbank'));
    }
}
