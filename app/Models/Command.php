<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    use HasFactory;
    protected $fillable = [ 'qwater_id', 'payment_id', 'user_id', 'state', 'created_at', 'updated_at', 'delivered_at' ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function qwater() {
        return $this->belongsTo(Qwater::class);
    }

    public function commandlines() {
        return $this->hasMany(CommandLine::class);
    }
}
