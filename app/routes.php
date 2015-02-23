<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', "HomeController@index");
Route::get('main/', "HomeController@main");

/*
Route::get('puntosventa/', function()
{
	return View::make('puntosventa.index');
});
*/
//Route::resource('/user/admin', 'AdminController');



Route::get('/val', function() use($app){
    
    $data = [
        'name' => "Juan lopez cortes",
        'email' => "correo@dominio.com",
        'phone' => "444 555 666",
        'pin_code' => "un pin",
    ];
    
    
    $validator = new \Laracodio\Validation\PersonasIndexFiltroValidator($app['validator']);
    try {
        $validator->validate($data);    
    } catch (\Laracodio\Exceptions\ValidationException $ex){
        $error = $ex->get_errors();
    }
    
        
    //return dd($app['validator']);
    return dd($error);
});

Route::get('/ajax', 'AjaxController@index');
Route::post('/ajax/personas', 'AjaxController@personas');


Route::get('pdf/', "ReposrtesController@index");
Route::get('pdf/reporte1', "ReposrtesController@reporte1");
