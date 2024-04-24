<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable = ['countrie_id', 'name'];

    public function country() {
        return $this->belongsTo(Country::class, 'countrie_id');
    }

    public function qwaters() {
        return $this->hasMany(Qwater::class);
    }
}
