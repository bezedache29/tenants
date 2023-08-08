<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use App\Models\Titre;
use App\Models\Charge;
use App\Models\Tenant;
use App\Models\Address;
use App\Models\Appartment;
use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\appartment_tenants;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(1)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $titre1 = Titre::create([
            'name' => 'Monsieur',
        ]);
        $titre2 = Titre::create([
            'name' => 'Madamme',
        ]);

        $address1 = Address::create([
            'street_number' => '5',
            'street' => 'rue de la force',
            'city' => 'Forcia',
            'zip_code' => '99999'
        ]);

        $tenant1 = Tenant::create([
            'email' => 'test@test.com',
            'last_name' => 'tester',
            'first_name' => 'test',
            'birth_date' => Carbon::now(),
            'job' => 'testeur',
            'phone_number' => '0612345789',
            'nationality' => 'française',
            'titre_id' => $titre1->id,
            'address_id' => $address1->id
        ]);

        $appartment1 = Appartment::create([
            'name' => 'Appartement T2',
            'short_name' => 'T2',
            'address_id' => $address1->id
        ]);

        $appartment_tenant1 = DB::table('appartment_tenants')->insert([
            'appartment_id' => $appartment1->id,
            'tenant_id' => $tenant1->id,
            'is_rented' => 1
        ]);

        $charge1 = Charge::create([
            'appartment_id' => $appartment1->id,
            'year' => Carbon::now(),
            'start_at' => Carbon::now(),
            'end_at' => Carbon::now()->addWeeks(3),
            'water_sub_meter' => '89',
            'water_supply_sub_suez' => '80',
            'water_supply_sub_iroise' => '12.12',
            'water_supply_consumption_suez' => '14',
            'water_supply_consumption_iroise' => '53',
            'waste_sub_suez' => '54',
            'waste_sub_iroise' => "2",
            'waste_consumption_suez' => '45',
            'waste_consumption_iroise' => '78',
            'water_network_modernization' => '54',
            'water_agency' => '45',
            'edf_meter_reading' => '79',
            'edf_sub' => '225',
            'edf_consumption' => '78',
            'edf_taxes' => '8',
            'edf_tva' => '10',
            'household' => '54',
            'trash' => '21',
            'provisions_on_charges_last_year' => '784',
        ]);
    }
}
