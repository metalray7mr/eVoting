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

Route::get('/info', function () {


	//$info = DB::table('info')->get();
	$info = App\Info::all();

    return view('info.index',compact('info'));
});


Route::get('/info/{inf}', function ($id) {
$info= App\Info::find($id);

//dd($info);
return view('/info.show',compact('info'));
});

Route::get('/tests','TestsController@index');
Route::get('/tests/{tst}','TestsController@show');





Route::get('/', function () {
    return view('welcome');
});
/*
<<<<<<< HEAD
*/


/*Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/', function () {
    return view('login');
});
*/
/*Route::get('/customer',function(){
	$customer = App\customer::find(1);
	echo "<pre>";
	print_r($customer);
});
*/


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/help', 'HomeController@help');
Route::get('/about','HomeController@about');
Route::get('/logout','Auth\LoginController@logout');
//Route::get('/demo', function() {
	//$users = DB::table('users')->get();
	//echo {{$users[0]->id}};


//});


Route::get('/home', 'HomeController@index');
Route::post('/party/save', 'HomeController@save');

