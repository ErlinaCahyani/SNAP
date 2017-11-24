<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Deliv extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'alamat','image','status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
}
