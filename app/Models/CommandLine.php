<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommandLine extends Model
{
    use HasFactory;
    protected $fillable = [ 'product_id', 'command_id', 'quantity', 'attributes_values', 'delivered_at', 'state' ];

    protected $casts = [ 'attributes_values' => 'json' ];


    public function command() {
        return $this->belongsTo(Command::class);
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
