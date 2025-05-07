<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    protected $table = "entities";
    protected $fillable = [
        'code',
        'name',
        'description',
        'email',
        'phone',
        'fax',
        'address',
        'status'
    ];
}
