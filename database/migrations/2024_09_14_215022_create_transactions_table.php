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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('program');
            $table->string('name');
            $table->string('email');
            $table->string('gender');
            $table->decimal('amount', 10 , 2);
            $table->date('dob');
            $table->string('phone');
            $table->string('country');
            $table->string('employment_status');
            $table->string('education_level');
            $table->boolean('payment_status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
