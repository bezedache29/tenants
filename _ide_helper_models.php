<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Address
 *
 * @property int $id
 * @property string|null $street_number
 * @property string $street
 * @property string $city
 * @property string $zip_code
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Appartment> $addresses
 * @property-read int|null $addresses_count
 * @method static \Illuminate\Database\Eloquent\Builder|Address newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Address query()
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereStreetNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereZipCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Address withoutTrashed()
 */
	class Address extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Appartment
 *
 * @property int $id
 * @property string $name
 * @property string $short_name
 * @property int $is_commercial
 * @property string $stage
 * @property int $address_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Address $address
 * @method static \Illuminate\Database\Eloquent\Builder|Appartment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Appartment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Appartment onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Appartment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Appartment whereAddressId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appartment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appartment whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appartment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appartment whereIsCommercial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appartment whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appartment whereShortName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appartment whereStage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appartment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appartment withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Appartment withoutTrashed()
 */
	class Appartment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Charge
 *
 * @property int $id
 * @property int $appartment_id
 * @property string $year
 * @property string $start_at
 * @property string $end_at
 * @property string $water_sub_meter
 * @property string $water_supply_sub_suez
 * @property string $water_supply_sub_iroise
 * @property string $water_supply_consumption_suez
 * @property string $water_supply_consumption_iroise
 * @property string $waste_sub_suez
 * @property string $waste_sub_iroise
 * @property string $waste_consumption_suez
 * @property string $waste_consumption_iroise
 * @property string $water_network_modernization
 * @property string $water_agency
 * @property string $edf_meter_reading
 * @property string $edf_sub
 * @property string $edf_consumption
 * @property string $edf_taxes
 * @property string $edf_tva
 * @property string $household
 * @property string $trash
 * @property string $provisions_on_charges_last_year
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Charge newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Charge newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Charge onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Charge query()
 * @method static \Illuminate\Database\Eloquent\Builder|Charge whereAppartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Charge whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Charge whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Charge whereEdfConsumption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Charge whereEdfMeterReading($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Charge whereEdfSub($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Charge whereEdfTaxes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Charge whereEdfTva($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Charge whereEndAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Charge whereHousehold($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Charge whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Charge whereProvisionsOnChargesLastYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Charge whereStartAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Charge whereTrash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Charge whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Charge whereWasteConsumptionIroise($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Charge whereWasteConsumptionSuez($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Charge whereWasteSubIroise($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Charge whereWasteSubSuez($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Charge whereWaterAgency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Charge whereWaterNetworkModernization($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Charge whereWaterSubMeter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Charge whereWaterSupplyConsumptionIroise($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Charge whereWaterSupplyConsumptionSuez($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Charge whereWaterSupplySubIroise($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Charge whereWaterSupplySubSuez($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Charge whereYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Charge withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Charge withoutTrashed()
 */
	class Charge extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Tenant
 *
 * @property int $id
 * @property string|null $email
 * @property string $last_name
 * @property string $first_name
 * @property string $birth_date
 * @property string|null $job
 * @property string|null $phone_number
 * @property string $nationality
 * @property int $address_id
 * @property int $titre_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereAddressId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereBirthDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereJob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereNationality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereTitreId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant withoutTrashed()
 */
	class Tenant extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Titre
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Titre newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Titre newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Titre onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Titre query()
 * @method static \Illuminate\Database\Eloquent\Builder|Titre whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Titre whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Titre whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Titre whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Titre whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Titre withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Titre withoutTrashed()
 */
	class Titre extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $pseudo
 * @property string $email
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePseudo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

