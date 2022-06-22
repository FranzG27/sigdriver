<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    public function microbus(){
        return $this->belongsTo(Microbus::class,'microbus_id');
    }
    public function conductor(){
        return $this->belongsTo(Conductor::class,'conductor_id');
    }
}
