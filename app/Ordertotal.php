<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Ordertotal extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'tgl','waktu','total','isDeliv','buktiBayar','status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
}
