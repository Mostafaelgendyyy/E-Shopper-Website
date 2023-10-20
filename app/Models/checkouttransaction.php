<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class checkouttransaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phonenumber',
        'address',
        'country',
        'city',
        'state',
        'zip',
        'total',
    ];
    public $timestamps = false;
}
