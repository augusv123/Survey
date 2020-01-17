<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PickListIdiomas;

class PickListPickListIdiomasController extends Controller
{
    public function index(){
        $idiomas = PickListIdiomas::all();
        return view('idiomas')->with('idiomas',$idiomas);
        
    }
    public function alta(Request $request){
        $idioma = $request->idioma;
        $idioma = new PickListIdiomas();
        $idioma->idioma = $idioma;
        $idioma->save();
        return   $this->index()->with('message','la idioma '.$idioma.' fue  agregada');

    }
    public function baja(Request $request){
        $idioma = PickListIdiomas::find($request->id)->first();
        $idioma ="";
        try{
            $idioma->delete();
            $idioma = $idioma->idioma;
        }
        catch(Exception $e){
            return $e;
        }
     return   $this->index()->with('message','la idioma '.$idioma.' fue  eliminada');


    }
    public function modificacion(Request $request){
        $idioma = PickListIdiomas::find($request->id)->first();
        try{
            $idioma->idioma= $request->idioma;
            $idioma->save();
        }
        catch(Exception $e){
            return $e;
        }
        return   $this->index()->with('message','idioma modificada');

    }
}