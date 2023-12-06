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

    public function editarPerfil(Request $request, $rut)
    {
        $perfil = Profile::where('rut', $rut)->firstOrFail();

        // Actualizar campos del perfil
        $perfil->nombre = $request->input('nombre');
        $perfil->rut = $request->input('rut');
        $perfil->carrera = $request->input('carrera');
        $perfil->universidad = $request->input('universidad');
        $perfil->edad = $request->input('edad');
        $perfil->ciudadOrigen = $request->input('ciudadOrigen');
        $perfil->email = $request->input('email');

        $perfil->save();

        // Actualizar hobbies
        if ($request->has('hobbys')) {
            $hobbysData = $request->input('hobbys');
            foreach ($hobbysData as $hobbyData) {
                $hobby = Hobby::findOrFail($hobbyData['id']);
                $hobby->pasatiempo = $hobbyData['pasatiempo'];
                
                $hobby->save();
            }
        }

        if ($request->has('frameworks')) {
            $frameworksData = $request->input('frameworks');
            foreach ($frameworksData as $frameworkData) {
                $framework = Framework::findOrFail($frameworkData['id']);
                $framework->tipo = $frameworkData['tipo'];
                $framework->herramienta = $frameworkData['herramienta'];
                
                $framework->save();
            }
        }

        return response()->json(['message' => 'Perfil actualizado exitosamente']);
    }
}
