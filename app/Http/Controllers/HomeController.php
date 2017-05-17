<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PartyTable;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
       $parties=PartyTable::all();
       return view('dashboard',compact('parties'));
    }

   public function help()
    {
       return view('help');
    }
     
   public function about()
   {
    return view('about');
   }
    public function save(Request $request) {
       dd($request, $request->all());
    }
}
