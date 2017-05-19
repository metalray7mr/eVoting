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
    	return view('/admin.authcontent');
    }

    public function authorized(Request $request){

        $name=$request->input('name');
        $gender=$request->input('gender');
        $dob=$request->input('dob');
        $userid=$request->input('userid');
        $voterid=$request->input('voterid');

       

        $voterInfo = new VoterInfo();
        $voterInfo->name=$name;
        $voterInfo->gender=$gender;
        $voterInfo->dob=$dob;
        $voterInfo->voterid=$voterid;
        $voterInfo->user_id=$userid;
        $voterInfo->save();

    }

}
