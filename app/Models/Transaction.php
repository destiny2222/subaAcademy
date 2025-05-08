<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'email',
        'gender',
        'dob',
        'phone',
        'country',
        'employment_status',
        'education_level',
        'amount',
        'program',
        'payment_status',
        'specialization'
    ];


    protected $casts = [
        'dob' => 'date',
    ];
    
}




