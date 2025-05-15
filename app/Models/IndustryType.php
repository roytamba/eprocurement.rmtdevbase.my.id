<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IndustryType extends Model
{
    protected $table = 'industry_types';
    protected $fillable = ['code', 'name', 'description', 'status'];
}
