<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Autor extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable=[
        'nombre',
        'apellido',
        'correo',
        'telefono',
        
    ];

    public function autor(){
        return $this->hasMany(Autor::class);
    }
}