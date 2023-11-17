<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create([
            'nombre' => 'Matias Nuñez Salomon',
            'rut' => '199518356',
            'carrera' => 'Estudiante de Ingenieria Civil Computación e Informática',
            'universidad' => 'UCN',
            'edad' => 24,
            'ciudadOrigen' => 'Antofagasta, Chile',
            'email' => 'matias.nunez01@alumnos.ucn.cl',
        ]);

        $profile = Profile::where('email', 'matias.nunez01@alumnos.ucn.cl')->first();

        
        $profile->hobbys()->create([
            'pasatiempo' => 'Jugar a la pelota',
        ]);
        $profile->hobbys()->create([
            'pasatiempo' => 'Ver series y/o videos de interés',
        ]);
        $profile->hobbys()->create([
            'pasatiempo' => 'Programar',
        ]);
        $profile->hobbys()->create([
            'pasatiempo' => 'Salir con amigos',
        ]);

        
        $profile->frameworks()->create([
            'tipo' => 'lenguaje', 'herramienta' => 'HTML'
        ]);
        $profile->frameworks()->create([
            'tipo' => 'lenguaje', 'herramienta' => 'CSS'
        ]);
        $profile->frameworks()->create([
            'tipo' => 'lenguaje', 'herramienta' => 'JavaScript'
        ]);
        $profile->frameworks()->create([
            'tipo' => 'lenguaje', 'herramienta' => 'Python'
        ]);
        $profile->frameworks()->create([
            'tipo' => 'lenguaje', 'herramienta' => 'C#'
        ]);
        $profile->frameworks()->create([
            'tipo' => 'framework', 'herramienta' => '.NET'
        ]);
        $profile->frameworks()->create([
            'tipo' => 'framework', 'herramienta' => 'Angular'
        ]);
        $profile->frameworks()->create([
            'tipo' => 'framework', 'herramienta' => 'Ionic'
        ]);
        $profile->frameworks()->create([
            'tipo' => 'framework', 'herramienta' => 'React'
        ]);
        $profile->frameworks()->create([
            'tipo' => 'framework', 'herramienta' => 'Flask'
        ]);
        $profile->frameworks()->create([
            'tipo' => 'tecnologia', 'herramienta' => 'GIT'
        ]);
        $profile->frameworks()->create([
            'tipo' => 'tecnologia', 'herramienta' => 'Trello'
        ]);
        $profile->frameworks()->create([
            'tipo' => 'tecnologia', 'herramienta' => 'Github/Bitbucket'
        ]);
    }
}
