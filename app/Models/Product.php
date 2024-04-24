<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [ 'category_id', 'shop_id', 'name', 'description', 'state', 'price', 'special_price', 'info' ];

    protected $casts = [
        'info' => 'json',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function shop() {
        return $this->belongsTo(Shop::class);
    }

    public function cartLines() {
        return $this->hasMany(CartLine::class);
    }

    public function commandeLine() {
        return $this->hasMany(CommandLine::class);
    }

    public function images() {
        return $this->hasMany(Image::class);
    }
    
    public function rewiews() {
        return $this->hasMany(Rewiew::class);
    }

    public function attributes() {
        return $this->belongsToMany(Atribute::class, 'atribute_products');
    }
}
