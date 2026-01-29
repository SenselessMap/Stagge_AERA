<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
     protected $fillable = [
        'name',
        'slug',
        'password',
        'moq',
        'order_start',
        'order_end',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'team_products');
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
