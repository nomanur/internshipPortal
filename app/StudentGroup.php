<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentGroup extends Model
{
    protected $fillabale = [
    	'student_id',
    	'group_status'
    ];
}
