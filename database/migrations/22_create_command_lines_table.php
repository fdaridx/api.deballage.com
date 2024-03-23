<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('command_lines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();
            $table->foreignId('command_id')->nullable()->constrained()->cascadeOnDelete();;
            $table->integer('quantity');
            $table->json('attributes_values');
            $table->enum('state', ['init', 'enabled', 'disabled'])->default('init');
            $table->timestamps();
            $table->timestamp('delivered_at')->nullable();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('command_lines');
    }
};
