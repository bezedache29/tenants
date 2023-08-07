<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appartment extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'short_name',
        'address_id',
    ];
}
