<?php

namespace App\Models\hod;

use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
