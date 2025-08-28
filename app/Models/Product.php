<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{

    protected $fillable = ['name', 'price', 'category_id', 'description', 'image', 'quantity', 'status'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_items')
                    ->withPivot('quantity', 'price')
                    ->withTimestamps();
    }

    public function purchases()
    {
        return $this->belongsToMany(Purchase::class, 'purchase_items')
                    ->withPivot('quantity', 'price')
                    ->withTimestamps();
    }
}

