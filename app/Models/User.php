<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    public function reportsFounded(Type $var = null)
    {
        # code...
        return $this->hasMany('App\Models\ReportFounded');
    }
    public function report(Type $var = null)
    {
        # code...
        return $this->hasMany('App\Models\Report');
    }
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'name',
       // 'avatar',
        'email',
        'phone',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute($value)
    {
        return asset($value);
    }

    public function getRouteKeyName(){
        return 'username';
    }

    public function path($append = '')
    {
        $path = url('', $this->username);

        return $append ? "{$path}/{$append}" : $path;
    }

    public function pathh($append = '')
    {
        $path = route('update', $this->username);

        return $append ? "{$path}/{$append}" : $path;
    }

}
