<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function index()
    {
       
       // $party = DB::table('party')->get();

         $party[0] = ['name' => 'Party 1'];
         $party[1] = ['name' => 'Party 2'];
         $party[2] = ['name' => 'Party 3'];
         $party[3] = ['name' => 'Party 4'];
         $party[4] = ['name' => 'Party 5'];
        

       // dd($party);

       return view('dashboard')->with('party', $party);
       // return view('dashboard', compact('party'));
       // return view('dashboard');

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
