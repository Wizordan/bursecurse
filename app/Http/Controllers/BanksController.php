<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BanksController extends Controller
{
    public function banks(){
        return view('currency');
    }
}
