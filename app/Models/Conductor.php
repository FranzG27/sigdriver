<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'ci',
        'nombre',
        'fecha_nacimiento',
        'sexo', 'telefono',
        'email',
        'categoria_licencia',
        'foto'
    ];
    public function microbus(){
        return $this->hasMany(Microbus::class);
    }
    public function foto(){
        return $this->hasMany(Foto::class);
    }
}
