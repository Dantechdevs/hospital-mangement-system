<?php

namespace App\Models;

use App\Models\hod\Hod;
use App\Models\block\Block;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Department extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'photo_path',
        'block_id',
        'hod_id', 
    ];
    public function block()
    {
        return $this->belongsTo(Block::class);
    }

   
    public function hod()
    {
        return $this->hasOne(Hod::class);
    }
}
