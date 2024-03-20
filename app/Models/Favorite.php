<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;

    protected $fillable = [ 'product_id', 'user_id_2', 'user_id', 'session_id' ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
