<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'users_id', 'shoes_id', 'total_price', 'status', 'checkout_time'
    ];
}
