<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [ 'categorie_id', 'shop_id', 'name', 'description', 'state', 'price', 'special_price', 'info' ];

    protected $casts = [
        'info' => 'json',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function shop() {
        return $this->belongsTo(Category::class);
    }

    public function cartLine() {
        return $this->belongsTo(CartLine::class);
    }

    public function commandeLine() {
        return $this->belongsTo(CommandLine::class);
    }

    public function rewiews() {
        return $this->hasMa(Rewiew::class);
    }
}
