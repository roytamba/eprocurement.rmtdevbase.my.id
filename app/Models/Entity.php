<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    protected $table = "entities";
    protected $fillable = [
        'code',
        'name',
        'business_type_id',
        'industry_type_id',
        'description',
        'email',
        'phone',
        'fax',
        'website',
        'address',
        'status'
    ];
}
