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
        Schema::create('charges', function (Blueprint $table) {
            $table->id();
            $table->foreignId('appartment_id')->constrained()->cascadeOnDelete();
            $table->date('year');
            $table->date('start_at');
            $table->date('end_at');
            $table->string('water_sub_meter');
            $table->string('water_supply_sub_suez');
            $table->string('water_supply_sub_iroise');
            $table->string('water_supply_consumption_suez');
            $table->string('water_supply_consumption_iroise');
            $table->string('waste_sub_suez');
            $table->string('waste_sub_iroise');
            $table->string('waste_consumption_suez');
            $table->string('waste_consumption_iroise');
            $table->string('water_network_modernization');
            $table->string('water_agency');
            $table->string('edf_meter_reading');
            $table->string('edf_sub');
            $table->string('edf_consumption');
            $table->string('edf_taxes');
            $table->string('edf_tva');
            $table->string('household');
            $table->string('trash');
            $table->string('provisions_on_charges_last_year');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('charges');
    }
};
