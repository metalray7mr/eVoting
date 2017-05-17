<?php

namespace App\Http\Controllers;

use App\PartyTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
