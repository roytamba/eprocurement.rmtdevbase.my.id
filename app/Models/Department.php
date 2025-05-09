<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'code',
        'name',
        'entity_id',
        'description',
        'email',
        'phone',
        'fax',
        'address',
        'status'
    ];
}
