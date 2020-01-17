<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pais;

class PaisesController extends Controller
{
    public function index(){
        $paises = Pais::all();
        return view('paises')->with('paises',$paises);
        
    }
    public function alta(Request $request){
        $nombre = $request->nombre;
        $pais = new Pais();
        $pais->nombre = $nombre;
        $pais->save();
        return   $this->index()->with('message','El país '.$nombre.' fue  agregado');

    }
    public function baja(Request $request){
        $pais = Pais::find($request->id)->first();
        $nombre ="";
        try{
            $pais->delete();
            $nombre = $pais->nombre;
        }
        catch(Exception $e){
            return $e;
        }
     return   $this->index()->with('message','El país '.$nombre.' fue  eliminado');


    }
    public function modificacion(Request $request){
        $pais = Pais::find($request->id)->first();
        try{
            $pais->nombre= $request->nombre;
            $pais->save();
        }
        catch(Exception $e){
            return $e;
        }
        return   $this->index()->with('message','País modificado');

    }
}
