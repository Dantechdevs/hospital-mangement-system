<?php

namespace App\Models\block;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
