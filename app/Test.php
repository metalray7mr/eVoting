<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public function scopeIncomplete($query){

    	return $query->where('completed',false);
    }
}
