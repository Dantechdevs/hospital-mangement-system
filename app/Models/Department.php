<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
