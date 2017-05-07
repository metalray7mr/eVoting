<?php
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


Route::group(['middleware'=>'web'],function(){
Auth::routes();
Route::get('/', function (){
    return view('welcome');
});
Route::get('home', 'HomeController@index');
Route::get('home/face', 'HomeController@index1');
/*Route::get('file', 'testing@index');
Route::post('store', 'testing@store');
*/
});

Route::post('face', function()
{
	return view('home/face');	
});
/*
Route::get('/home', function()
{
	$voterindex= new voterindex;
	$voterindex->id =1;
	$voterindex->voterindex=4;
	$voterindex->save();
	return view::make('hello');
		
});
*/
?>