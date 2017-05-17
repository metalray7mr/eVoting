<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PartyTable;

class PartyController extends Controller
{
    
    public function index(){
    	$parties=PartyTable::all();
    	
    	return view('dashboard',compact('parties'));

    	

    }
}
