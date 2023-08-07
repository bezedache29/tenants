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
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique()->nullable();
            $table->string('last_name');
            $table->string('first_name');
            $table->date('birth_date');
            $table->string('job')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('nationality');
            $table->foreignId('address_id')->constrained()->cascadeOnDelete();
            $table->foreignId('titre_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenants');
    }
};
