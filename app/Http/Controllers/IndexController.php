<?php

namespace App\Http\Controllers;

use App\Models\Banks;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $banks = Banks::find(1);
        $currency = $banks->currency;
        return view ('index',compact('currency','banks'));
    }
}
