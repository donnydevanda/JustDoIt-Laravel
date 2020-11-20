<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
    protected $fillable = [
        'name', 'description', 'price', 'image'
    ];

    public $timestamps = false;

    public function shoes(){
        return $this->hasMany(Shoe::class, 'shoes_id', 'id');
    }
}
