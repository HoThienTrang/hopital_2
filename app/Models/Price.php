<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = [
        'price',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
