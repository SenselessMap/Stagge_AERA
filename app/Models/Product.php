<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $fillable = ['name', 'price', 'image_path'];

    public function teams()
    {
        return $this->belongsToMany(Team::class, 'team_products');
    }
}
