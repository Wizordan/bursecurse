<?php

namespace App\Http\Controllers;

use App\Models\Callback;
use Illuminate\Http\Request;

class CallbackController extends Controller
{
    public function callback(){

        return view('aboutcall');
    }
    public function callstore(Request $request){

        $callback = new Callback;

        $callback->currency = $request->currency;
        $callback->Code = $request->Code;
        $callback->bank = $request->bank;
        $callback->email = $request->email;

        $callback->save();

        return response()->json(['success'=>'Form is successfully submitted!']);

    }
}
