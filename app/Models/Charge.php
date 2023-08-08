<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Charge extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'appartment_id',
        'year',
        'start_at',
        'end_at',
        'water_sub_meter',
        'water_supply_sub_suez',
        'water_supply_sub_iroise',
        'water_supply_consumption_suez',
        'water_supply_consumption_iroise',
        'waste_sub_suez',
        'waste_sub_iroise',
        'waste_consumption_suez',
        'waste_consumption_iroise',
        'water_network_modernization',
        'water_agency',
        'edf_meter_reading',
        'edf_sub',
        'edf_consumption',
        'edf_taxes',
        'edf_tva',
        'household',
        'trash',
        'provisions_on_charges_last_year',
    ];
}
