<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\voterindex;
use Illuminate\Http\Request;

class voteindex extends Model
{
    protected $fillable = [
        'id', 'voteindex',
    ];

}
