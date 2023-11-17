<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use App\Models\Hobby;
use App\Models\Framework;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function obtenerDatos()
    {
        $usuarios = Profile::with('hobbys', 'frameworks')->where('rut', 199518356)->get();
        
        $perfil = $usuarios->first();

        return response()->json($perfil);

        
    }
}
