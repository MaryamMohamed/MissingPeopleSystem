<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

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

    use Sortable;
    protected $fillable = [ 'full_name', 'gander','age', 'date_of_found' ];
    public $sortable = ['id', 'full_name', 'gander','age', 'created_at', 'date_of_found'];
}
