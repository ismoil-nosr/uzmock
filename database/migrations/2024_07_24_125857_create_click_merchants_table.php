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
        Schema::create('click_merchants', function (Blueprint $table) {
            $table->id();
            $table->string('domain')->nullable();
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('merchant_id');
            $table->unsignedBigInteger('merchant_user_id');
            $table->string('secret_key');
            $table->string('prepare_url')->nullable();
            $table->string('complete_url')->nullable();
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('click_merchants');
    }
};
