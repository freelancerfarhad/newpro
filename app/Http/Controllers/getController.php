<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
class getController extends Controller
{
    //
     //get data section
    //  function ongetData(Request $Request){
    //   return  $Request->session()->get('namekey');
    // }

       //get data cookie
       function ongetData(Request $Request){
        return Cookie::get(key:'namekey');
      }


}
