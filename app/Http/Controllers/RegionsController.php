<?php

namespace App\Http\Controllers;


use App\Models\b_c_link;
use App\Models\Banks;
use App\Models\Currency;
use App\Models\Regions;
use Illuminate\Http\Request;

class RegionsController extends Controller
{

    public function regions(){
        $regions = Regions::all()->all();
        $allreg = Regions::all()->all();
        $banks = Banks::all()->all();
        $currency = Currency::all()->all();
        return view('regions',compact('regions','allreg','currency','banks'));
    }
    public function regionsget($regionsID = 0){
//        $allreg  = Regions::all()->all();
//        $regions = Regions::find($regionsID)->banks;
//        $ids = array();
//        foreach ($regions as $key => $value) {
//        array_push($ids,$value->id);
//        }
//        $link = b_c_link::find($ids);
//        dd($link);
//        return view('regions',compact('regions','allreg','link'));
        $allreg  = Regions::all()->all();
        $banks = Regions::find($regionsID)->banks;
        foreach ($banks as $r) {
            $currency = Currency::find($r);
        }
        return view('regions',compact('banks','allreg','currency'));
    }

}
