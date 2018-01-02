<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'date_of_production',
        'number',
        'user_id',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function prices()
    {
        return $this->belongsToMany(Price::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
