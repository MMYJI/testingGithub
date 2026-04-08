<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    //
    protected $fillable = [
        'request_number',
        'request_details',
    ];

    //protected $guarded = [];
}
