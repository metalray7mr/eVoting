<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;

class TestsController extends Controller
{
    public function index(){
    	$tests=Test::all();
    	return view('/tests.index', compact('tests'));

    	//echo "The control reaches here successfully";
    }
    public function show($id)
    {
    	
    	$test = Test::find($id);
    	
    	return view('/tests.show', compact('test'));
    }
}
