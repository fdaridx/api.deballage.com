<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [ 'category_id', 'name', 'description', 'profile' ];

    public function products() {
        return $this->hasMany(Product::class);
    }

    public function categories() {
        return $this->hasMany(Category::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
