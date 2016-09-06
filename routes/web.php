<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});


/*
Route::get('/{foo}', function ($foo) {
    return $foo;
});
 poo 로 받은 변수를 다시 리턴해서 화면에 뿌려줌*/

Route::get('/error_', function () {
    return view('errors.503');
});