<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->enum('state', ['init', 'enabled', 'disabled', 'refuse']);
            $table->enum('type', ['user', 'seller', 'admin']);
            $table->string('phone');
            $table->string('gender');
            $table->string('email')->unique();
            $table->string('password');
            $table->json('info');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
