<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = ['user_id', 'total'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'purchase_items')
                    ->withPivot('quantity', 'price')
                    ->withTimestamps();
    }
}
