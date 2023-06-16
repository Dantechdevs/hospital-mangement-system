<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'phone',
        'sex',
        'dob',
        'age',
        'birthplace',
        'nationality',
        'occupation',
        'image',
        'CivilStatus',
        'religion',
        'guardian'
    ];
}
