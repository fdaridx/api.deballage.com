<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qwater extends Model
{
    use HasFactory;
    protected $filable = ['citie_id', 'name'];

    public function city() {
        return $this->belongsTo(City::class);
    }
}
