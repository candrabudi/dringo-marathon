<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'nik',
        'phone_number',
        'gender',
        'birth_date',
        'birth_place',
        'address',
        'category',
        'blood_group',
        'illness_history',
    ];

}
