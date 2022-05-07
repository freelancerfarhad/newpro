<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
class clearController extends Controller
{
   
    //
     //clear data session
    //  function onclearData(Request $Request){
    //       $Request->session()->forget('namekey');
    // }

      //clear data cookie
      function onclearData(Request $Request){
        Cookie::queue(Cookie::forget('namekey'));
  }
}
