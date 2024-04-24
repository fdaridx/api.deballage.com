<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = ['atribute_id', 'value'];

    public function attribute() {
        return $this->belongsTo(Atribute::class, 'atribute_id');
    }
}
