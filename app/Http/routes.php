<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('piola', function(){
    exit('weeeeeeeeeeeee testando o git');
});
Route::get('vartest', ['as' => 'vartest','uses' => 'FestivalController@vartest']);
Route::get('looptest', ['as'=> 'looptest', 'uses' => 'FestivalController@looptest']);
Route::resource('festival', 'FestivalController');
