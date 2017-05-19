<?php

namespace App\Http\Controllers;

use App\PartyTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

class UserController extends Controller
{
	public function vote(Request $request) {
		$partyID = $request->input('party_id');
		$voteDate = $request->input('vote_date');
		$voteTime = $request->input('vote_time');

		$party = PartyTable::find($partyID);

		if(!$party) {
			return false;
		}

		$voterInfo = Auth::user()->info;

		$voterInfo->pvoted = $partyID;

		$voterInfo->save();

		return redirect('/home');


	}

	public function profile(){
		return view('profile',array('user'=>Auth::user()));
	}
	public function update_avatar(Request $request){

		if($request->hasFile('avatar')){
			$avatar=$request->file('avatar');
			$filename = time().'.'.$avatar->getClientOriginalExtension();
			Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/'.$filename));
			$user=Auth::user();
			$user->avatar=$filename;
			$user->save();
		}
		return view('profile',array('user'=>Auth::user()));

	}
}
