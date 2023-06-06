<?php

namespace App\Models\hod;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hod extends Model
{
    use HasFactory;

    protected $fillable=[
        'doctor_id',
    ];

   
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
