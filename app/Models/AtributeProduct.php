<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class AtributeProduct extends Pivot
{
    use HasFactory;

    protected $filable = ['attribute_id', 'product_id'];

}
