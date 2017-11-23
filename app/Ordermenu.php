<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Ordermenu extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'idOrder','idCus', 'idMenu','jumlah','totalHarga','status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
}
