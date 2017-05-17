<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VoterInfo extends Model
{
    

    public function getDobAttribute($value) {
    		$date = new \DateTime($value);
    		return $date->format('j-F-y');
    }
}
