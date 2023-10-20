<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shoppingcart extends Model
{
    use HasFactory;

    protected $fillable = [
        'userid',
        'productid',
        'quantity'
    ];
    public $timestamps = false;
}

