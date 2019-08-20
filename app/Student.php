<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
            'full_name',
            'department',
            'cell_phone',
            'nationality',
            'religion',
            'present_address',
            'arranged_by',
            'program',
            'dob',
            'gender',
            'parmanent_address',
            'user_id'
    ];
}
