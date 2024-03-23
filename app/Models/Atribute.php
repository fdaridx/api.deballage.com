<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atribute extends Model
{
    use HasFactory;

    protected $filable = ['name'];

    public function properties() {
        return $this->hasMany(Property::class);
    }

    public function products() {
        return $this->belongsToMany(Product::class);
    }

}
