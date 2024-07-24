<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mock_cards', function (Blueprint $table) {
            $table->id();
            $table->string('pan');
            $table->unsignedInteger('expiry');
            $table->unsignedInteger('cvv');
            $table->unsignedBigInteger('phone');
            $table->string('type');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mock_cards');
    }
};
