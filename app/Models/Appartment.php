<?php

namespace App\Models;

use App\Models\Address;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appartment extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'short_name',
        'is_commercial',
        'stage',
        'address_id',
    ];

    protected $with = ['address'];

    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}
