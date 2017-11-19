<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Table extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lokasi', 'kapasitas_min','status','desc',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
}
