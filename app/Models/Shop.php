<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $fillable = [ 'user_id', 'intitule', 'description', 'state', 'profile', 'cover', 'info' ];

    protected $casts = [ 'info' => 'json' ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function products() {
        return $this->hasMany(Product::class);
    }

    public function rewiews() {
        return $this->hasMany(Rewiew::class);
    }
}
