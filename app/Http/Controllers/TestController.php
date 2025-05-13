<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\TestAptitud;
use App\TestPersonalidad;
use App\TestHabilidades;
use App\TestIntereses;
use DB;

class TestController extends Controller
{
    public function index()
    {
        return view('test');
    }

    public function guardarTestAptitud(Request $request)
    {
        
        $request->validate([
            'habilidad_mas_destacada' => 'required|string|max:255',
            'motivacion_trabajo' => 'required|string|max:255',
            'manejo_estres' => 'required|string|max:255',
            'mayor_logro_profesional' => 'required|string|max:255',
            'trabajo_equipo' => 'required|string|max:255',
            'habilidades_mejorar' => 'required|string|max:255',
           
        ]);
        $user_id = auth()->id();
        TestAptitud::create([
            'user_id' => $user_id,
            'habilidad_mas_destacada' => $request->habilidad_mas_destacada,
            'motivacion_trabajo' => $request->motivacion_trabajo,
            'manejo_estres' => $request->manejo_estres,
            'mayor_logro_profesional' => $request->mayor_logro_profesional,
            'trabajo_equipo' => $request->trabajo_equipo,
            'habilidades_mejorar' => $request->habilidades_mejorar,
            
        ]);

        return back()->with('success', 'Test de Aptitud guardado con éxito');
    }

    public function guardarTestPersonalidad(Request $request)
    {
        $request->validate([
            'pregunta1' => 'required|string|max:255',
            'pregunta2' => 'required|string|max:255',
            'pregunta3' => 'required|string|max:255',
            'pregunta4' => 'required|string|max:255',
            'pregunta5' => 'required|string|max:255',
            'pregunta6' => 'required|string|max:255',
          
        ]);
        $user_id = auth()->id();
        TestPersonalidad::create([
            'user_id' => $user_id,
            'pregunta1' => $request->pregunta1,
            'pregunta2' => $request->pregunta2,
            'pregunta3' => $request->pregunta3,
            'pregunta4' => $request->pregunta4,
            'pregunta5' => $request->pregunta5,
            'pregunta6' => $request->pregunta6,
            
        ]);

        return back()->with('success', 'Test de Personalidad guardado con éxito');
    }

    public function guardarTestHabilidades(Request $request)
    {
        $request->validate([
            'pregunta1' => 'required|string|max:255',
            'pregunta2' => 'required|string|max:255',
            'pregunta3' => 'required|string|max:255',
            'pregunta4' => 'required|string|max:255',
            'pregunta5' => 'required|string|max:255',
            'pregunta6' => 'required|string|max:255',
            
        ]);
        $user_id = auth()->id();
        TestHabilidades::create([
            'user_id' => $user_id,
            'pregunta1' => $request->pregunta1,
            'pregunta2' => $request->pregunta2,
            'pregunta3' => $request->pregunta3,
            'pregunta4' => $request->pregunta4,
            'pregunta5' => $request->pregunta5,
            'pregunta6' => $request->pregunta6,
            
        ]);

        return back()->with('success', 'Test de Habilidades guardado con éxito');
    }

    public function guardarTestIntereses(Request $request)
    {
        $request->validate([
            'pregunta1' => 'required|string|max:255',
            'pregunta2' => 'required|string|max:255',
            'pregunta3' => 'required|string|max:255',
            'pregunta4' => 'required|string|max:255',
            'pregunta5' => 'required|string|max:255',
            'pregunta6' => 'required|string|max:255',
            
        ]);
        $user_id = auth()->id();
        TestIntereses::create([
            'user_id' => $user_id,
            'pregunta1' => $request->pregunta1,
            'pregunta2' => $request->pregunta2,
            'pregunta3' => $request->pregunta3,
            'pregunta4' => $request->pregunta4,
            'pregunta5' => $request->pregunta5,
            'pregunta6' => $request->pregunta6,
            
        ]);

        return back()->with('success', 'Test de Intereses guardado con éxito');
    }

    public function descargarPDF()
    {
        $id = auth()->id();
    
        $aptitud = DB::table('respues_aptitud')->where('user_id', $id)->first();
        $personalidad = DB::table('respuestas_personalidad')->where('user_id', $id)->first();
        $habilidades = DB::table('respuestas_habilidades')->where('user_id', $id)->first();
        $intereses = DB::table('respuestas_intereses')->where('user_id', $id)->first();
    
        $datos = [
            'user_id' => $id,
            'habilidad_mas_destacada' => $aptitud->habilidad_mas_destacada ?? 'No disponible',
            'motivacion_trabajo' => $aptitud->motivacion_trabajo ?? 'No disponible',
            'manejo_estres' => $aptitud->manejo_estres ?? 'No disponible',
            'mayor_logro_profesional' => $aptitud->mayor_logro_profesional ?? 'No disponible',
            'trabajo_equipo' => $aptitud->trabajo_equipo ?? 'No disponible',
            'habilidades_mejorar' => $aptitud->habilidades_mejorar ?? 'No disponible',
    
            'pregunta1_personalidad' => $personalidad->pregunta1 ?? 'No disponible',
            'pregunta2_personalidad' => $personalidad->pregunta2 ?? 'No disponible',
            'pregunta3_personalidad' => $personalidad->pregunta3 ?? 'No disponible',
            'pregunta4_personalidad' => $personalidad->pregunta4 ?? 'No disponible',
            'pregunta5_personalidad' => $personalidad->pregunta5 ?? 'No disponible',
            'pregunta6_personalidad' => $personalidad->pregunta6 ?? 'No disponible',
    
            'pregunta1_habilidades' => $habilidades->pregunta1 ?? 'No disponible',
            'pregunta2_habilidades' => $habilidades->pregunta2 ?? 'No disponible',
            'pregunta3_habilidades' => $habilidades->pregunta3 ?? 'No disponible',
            'pregunta4_habilidades' => $habilidades->pregunta4 ?? 'No disponible',
            'pregunta5_habilidades' => $habilidades->pregunta5 ?? 'No disponible',
            'pregunta6_habilidades' => $habilidades->pregunta6 ?? 'No disponible',
    
            'pregunta1_intereses' => $intereses->pregunta1 ?? 'No disponible',
            'pregunta2_intereses' => $intereses->pregunta2 ?? 'No disponible',
            'pregunta3_intereses' => $intereses->pregunta3 ?? 'No disponible',
            'pregunta4_intereses' => $intereses->pregunta4 ?? 'No disponible',
            'pregunta5_intereses' => $intereses->pregunta5 ?? 'No disponible',
            'pregunta6_intereses' => $intereses->pregunta6 ?? 'No disponible',
        ];
    
        $pdf = PDF::loadview('resultado', compact('datos', 'aptitud', 'personalidad', 'habilidades', 'intereses'));
    
        DB::table('respues_aptitud')->where('user_id', $id)->delete();
        DB::table('respuestas_personalidad')->where('user_id', $id)->delete();
        DB::table('respuestas_habilidades')->where('user_id', $id)->delete();
        DB::table('respuestas_intereses')->where('user_id', $id)->delete();
    
        return $pdf->download('resultados_test.pdf');
    }
    
    
}


