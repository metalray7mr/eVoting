<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\VoterInfo;

class AdminController extends Controller
{
    public function dashboard() {
    	return view('admin.dashboard');
    }

    public function info(){
    	$infos = VoterInfo::all();

    	return view('admin.info',compact('infos'));
    }

    public function adminau(){
    	return view('admin.authorize');
    }
}
