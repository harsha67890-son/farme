<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupen extends Model
{
    use HasFactory;
    protected $table = 'coupens';

    protected $fillable = [
        'title',
        'code',
        'value',
        'cart_value'
        // 'password',
    ];
}
