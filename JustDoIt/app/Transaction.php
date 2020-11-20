<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'users_id', 'shoes_id', 'quantity', 'price', 'checkout_time'
    ];

    public function users(){
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function shoes(){
        return $this->belongsTo(Shoe::class, 'shoes_id', 'id');
    }

    public $timestamps = false;

}
