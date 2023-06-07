<?php

namespace App\Models\block;

use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Block extends Model
{
    use HasFactory;


    protected $fillable=[
        'blockfloor',
        'blockcode'
    ];
        
        public function departments()
        {
            return $this->hasMany(Department::class);
        }
}
