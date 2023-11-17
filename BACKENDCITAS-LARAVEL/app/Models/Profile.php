<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre','rut', 'carrera', 'universidad', 'edad', 'ciudadOrigen', 'email',
    ];

    public function hobbys()
    {
        return $this->hasMany(Hobby::class, 'usuario_id');
    }

    public function frameworks()
    {
        return $this->hasMany(Framework::class, 'usuario_id');
    }


}
