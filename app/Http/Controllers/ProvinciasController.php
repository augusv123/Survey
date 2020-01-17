<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provincia;

class ProvinciasController extends Controller
{
    public function index(){
        $provincias = Provincia::all();
        return view('provincias')->with('provincias',$provincias);
        
    }
    public function alta(Request $request){
        $nombre = $request->nombre;
        $provincia = new Provincia();
        $provincia->nombre = $nombre;
        $provincia->save();
        return   $this->index()->with('message','la provincia '.$nombre.' fue  agregada');

    }
    public function baja(Request $request){
        $provincia = Provincia::find($request->id)->first();
        $nombre ="";
        try{
            $provincia->delete();
            $nombre = $provincia->nombre;
        }
        catch(Exception $e){
            return $e;
        }
     return   $this->index()->with('message','la provincia '.$nombre.' fue  eliminada');


    }
    public function modificacion(Request $request){
        $provincia = Provincia::find($request->id)->first();
        try{
            $provincia->nombre= $request->nombre;
            $provincia->save();
        }
        catch(Exception $e){
            return $e;
        }
        return   $this->index()->with('message','provincia modificada');

    }
}
