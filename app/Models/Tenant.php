<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tenant extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'email',
        'last_name',
        'first_name',
        'birth_date',
        'job',
        'phone_number',
        'nationality',
        'address_id',
        'titre_id',
    ];
}
