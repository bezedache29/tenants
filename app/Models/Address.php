<?php

namespace App\Models;

use App\Models\Appartment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'street_number',
        'street',
        'city',
        'zip_code',
    ];

    public function addresses()
    {
        return $this->hasMany(Appartment::class);
    }
}
