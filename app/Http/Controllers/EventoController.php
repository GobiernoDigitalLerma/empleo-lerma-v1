<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Evento; 
use App\User; 
use App\Notifications\NewEvent;
use Illuminate\Support\Facades\Notification;

class EventoController extends Controller
{
    public function eventos()
    {
        $eventos = Evento::all(); 
        return view('eventos', compact('eventos'));
    }
    

    public function create()
    {
        return view('eventos.create');
    }

    public function guardardatoseventos(Request $request)
    {
        $request->validate([
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required',
            'fecha' => 'required|date',
            'link' => 'nullable|string|max:255',
            'ubicacion' => 'required|string|max:255',
        ]);
        

        
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $nombreImagen = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('archivo'), $nombreImagen);
        } else {
            $nombreImagen = "sinfoto.png"; 
        }

        $evento = Evento::create([
            'foto' => $nombreImagen,
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'fecha' => $request->fecha,
            'link' => $request->link,
            'ubicacion' => $request->ubicacion,
        ]);
       
        $users = User::where('tipo_user', 'user')->get();
      Notification::send($users, new NewEvent($evento));

        return redirect()->route('eventos')->with('success', 'Evento publicado y notificado.');
    }
    
    public function updateeventos(Request $request, $id)
    {
        $evento = Evento::find($id);
        if (!$evento) {
            return redirect()->back()->with('error', 'Evento no encontrado.');
        }
    
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'fecha' => 'required|date',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'nullable|string|max:255',
            'ubicacion' => 'required|string|max:255'
        ]);
    
        $evento->titulo = $request->titulo;
        $evento->descripcion = $request->descripcion;
        $evento->fecha = $request->fecha;
        $evento->link= $request->link;
        $evento->ubicacion= $request->ubicacion;

        if ($request->hasFile('foto')) {
            if ($evento->foto && file_exists(public_path('archivo/' . $evento->foto))) {
                unlink(public_path('archivo/' . $evento->foto));
            }
    
            $imagen = $request->file('foto');
            $nombreImagen = time().'_'.$imagen->getClientOriginalName();
            $imagen->move(public_path('archivo'), $nombreImagen);
            $evento->foto = $nombreImagen;
        }
    
        $evento->save();
    
        return redirect()->route('eventos')->with('success', 'Evento actualizado con éxito.');
    }


    public function deleteeventos($id)
    {
        $evento = Evento::find($id);
        if (!$evento) {
            return redirect()->back()->with('error', 'Evento no encontrado.');
        }

        $imagenPath = public_path('archivo/' . $evento->foto);
        if (file_exists($imagenPath)) {
            unlink($imagenPath);
        }

        $evento->delete();

        return redirect()->route('modificacioneventos')->with('success', 'Evento eliminado con éxito.');
    }
    public function modificacioneventos()
    {
        $eventos = Evento::all();
        return view('modificacioneventos', compact('eventos'));
    }

    public function createeventos()
    {
        return view('eventos.create');
    }
    public function descrevento($id)
    {
        $evento = Evento::findOrFail($id);
        return view('descrevento', compact('evento'));
    }
    
    
}