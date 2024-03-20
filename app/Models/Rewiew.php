<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rewiew extends Model
{
    use HasFactory;
    protected $fillable = [ 'product_id', 'shop_id', 'rating', 'text' ];

    public function product() {
        return $this->belongsTo(Product::class);
    }

    public function shop() {
        return $this->belongsTo(Shop::class);
    }

}
