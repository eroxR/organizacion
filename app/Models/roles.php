<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    use HasFactory;

    //relación muchos a muchos
    public function empleado()
    {
        return $this->belongsToMany('App\Models\empleado');
    }

    protected $fillable = [
        'nombre',
    ];
}
