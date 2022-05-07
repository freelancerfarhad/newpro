<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/{token}', function () {
//     return view(view:'welcome');
// })->middleware(middleware:'demo');
Route::get('/', function () {
    return view(view:'welcome');
});
Route::namespace('App\Http\Controllers')->group(function(){
    Route::get(uri:'/save',action:'saveController@onseveData');
    Route::get(uri:'/get',action:'getController@ongetData');
    Route::get(uri:'/clear',action:'clearController@onclearData');

});
