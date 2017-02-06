<?php

use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/send', function(Request $request){
	$email = $request->get('email') ? $request->get('email') : 'jonathan.mmachado@outlook.com';
	Mail::to($email)->send(new App\Mail\TestMail());
	return "Yeah! Email sended!";
});