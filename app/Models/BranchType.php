<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BranchType extends Model
{
    protected $table = 'branch_types';
    protected $fillable = [
        'code',
        'name',
        'description',
        'status'
    ];
}
