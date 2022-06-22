<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artista;

class BackendController extends Controller
{
    public function obtenerArtistas(){
        
        $artistas = Artista::all();

        return $artistas;
    }


    public function guardarArtista(Request $datos){
    
        $artista = new Artista();
        $artista->nombre = $datos->input('nombre');
        $artista->imagen = $datos->input('imagen');
        $artista->save();
    
        return $artista;
    }

    public function consultarArtista($id){
        $artista = Artista::find($id);

        return $artista;
    }

    public function eliminarArtista($id){
        $artista = Artista::find($id);
        $artista->delete();

        return "Artista ".$id. " fue eliminado";
    }

    public function actualizarArtista(Request $datos, $id){
        $artista = Artista::find($id);
        $artista->nombre = $datos->input('nombre');
        $artista->imagen = $datos->input('imagen');
        $artista->save();

        return $artista;
    }
}


 