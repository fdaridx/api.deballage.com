<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartLine extends Model
{
    use HasFactory;
    protected $fillable = [ 'product_id', 'cart_id', 'quantity', 'attributesValues',
        'state', 'created_at', 'updated_at', 'deleted_at',
    ];

    protected $casts = [ 'attributesValues' => 'json' ];

    public function cart() {
        return $this->belongsTo(Cart::class);
    }

    public function products() {
        return $this->hasMany(Product::class);
    }
}
