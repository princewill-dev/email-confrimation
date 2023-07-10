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
        Schema::create('otp', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('email');
            $table->longText('activity_id');
            $table->string('otp_code');
            $table->string('status')->default('pending');
            $table->string('atempts')->default(0);
            $table->string('time_when_verified')->default('NA');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('otp');
    }
};
