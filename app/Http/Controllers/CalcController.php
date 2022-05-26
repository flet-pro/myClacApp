<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function Add(Request $request){
        $post = $request->all();

        //dd($post);

        $first = $post["first-num"];
        $second = $post["second-num"];

        $amount = $first + $second;

        return view("result", compact("amount"));
    }
}
