<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    use HasFactory;

    //relación muchos a muchos
    public function roles()
    {
        return $this->belongsToMany(roles::class);
    }

    protected $fillable = [
        'nombre',
        'email',
        'sexo',
        'area_id',
        'boletin',
        'descripcion',
        'rol',
    ];
}
