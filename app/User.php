<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id', 'student_id', 'is_active', 'photo_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function photo(){
        return $this->belongsTo('App\Photo');
    }

    public function student(){
        return $this->hasOne('App\Student');
    }

     public function StudentGroup()
    {
        return $this->hasOne('App\StudentGroup');
    }

    public function studentInfo()
    {
        return $this->hasOne('App\StudentInternInfo');
    }

    public function isAdmin(){
        if ($this->role->name == 'administrator') {
            return true;
        }
            return false;
    }


    public function isStudent(){
        if ($this->role->name == 'student') {
            return true;
        }
            return false;
    }

    public function isEmployeer(){
        if ($this->role->name == 'employeer') {
            return true;
        }
            return false;
    }



}
