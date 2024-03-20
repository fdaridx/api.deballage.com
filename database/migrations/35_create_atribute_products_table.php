<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('atribute_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('atribute_id')->constrained();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();;
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('atribute_products');
    }
};
