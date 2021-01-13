<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    //use HasFactory;
    public function user()
    {
        # code...
        return $this->belongsTo('App\Models\User');
    }
    public function path($append = '')
    {
        $path = url('report', $this->id);

        return $append ? "{$path}/{$append}" : $path;
    }
}
