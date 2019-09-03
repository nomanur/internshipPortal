<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentInternInfo extends Model
{
    protected $fillable = [
    		'user_id',
    		'intern_semester',
    		'group_id',
    		'intern_arranged_by',
    		'intern_starting_date',
    		'completed_credit_till_now',
    		'specification',
    		'result_till_now',
    ];
}
