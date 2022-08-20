<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userprofile extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullName',
       
        'user_id',
        'emailUser',
        'Expertise',
        'phoneNumber',
        'CareerRecords',
        'EducationalRecords',
        'country',
        'city',
        'address',
        'descriptionUser',
        
        
    ];
}
