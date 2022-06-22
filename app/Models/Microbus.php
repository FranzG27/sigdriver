<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Microbus extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
        

    public function conductor(){
        return $this->belongsTo(Conductor::class, 'conductor_id');
    }
    public function foto(){
        return $this->hasMany(Foto::class);
    }
}
