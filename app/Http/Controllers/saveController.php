<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
class saveController extends Controller
{
    //save data session
    // function onseveData(Request $Request){
    //     $Request->session()->put('namekey','farhad hossain');
    // }

    //save data cookie
     function onseveData(Request $Request){
    Cookie::queue('namekey','farhad hossain',4000);
}

}
