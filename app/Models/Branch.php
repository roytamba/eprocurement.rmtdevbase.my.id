<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table = "branches";
    protected $fillable = [
        'entity_id',
        'branch_type_id',
        'code',
        'name',
        'email',
        'phone',
        'fax',
        'postal_code',
        'address',
        'description',
        'status',
    ];
}
