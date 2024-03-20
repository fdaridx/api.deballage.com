<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('favorites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->nullable()->constrained();
            $table->unsignedBigInteger('user_id_2')->nullable();
            $table->string('session_id')->nullable();
            $table->timestamps();

            $table->foreign('user_id_2')->references('id')->on('users');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('favorites');
    }
};
