<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileTalent extends Model
{
    protected $table = 'profile_talents';
    protected $fillable = [
        'user_id',
        'photo',
        'full_name', 
        'phone_number', 
        'birth_date', 
        'address', 
        'gender', 
        'agency', 
        'last_education', 
        'achievements',
        'email', 
        'password', 
        'linkedin', 
        'instagram',
        'cv'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
