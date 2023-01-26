<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Libro extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'id_autor',
        'titulo',
        'categoria',

    ];
    public function libro(){
        return $this->belongsTo(Autor::class);
    }
}
