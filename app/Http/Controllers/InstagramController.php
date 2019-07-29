<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Seguidor;
use App\Publicacion;
class InstagramController extends Controller
{
    public function menuPrincipal(){
        
        //$usuarios= Usuario::where('password', 1234)->get();
        //$usuarios = Usuario::find(2);
        //dd($usuarios);
        //$usuario= new Usuario;
        //$usuario->correo="maria@hotmail.com";
        //$usuario->nombre="maria zarate";
        //$usuario->password="4567";
        //$usuario->save();
        
        $usuarios = Usuario::all();
        
        $titulo="Mi pagina web";
        $autor="";
       
        return view("usuario.panelPrincipal",
                ['titulo'=>$titulo,'autor'=>$autor,
                  'usuarios'=>$usuarios]);
    }
    
    public function panel(){
        $pu = Publicacion::paginate(15);
        return view("usuario.panelPrincipal",
                ["publicaciones"=>$pu]);
    }
    
    public function mostrarFoto(Request $request){
        
        
        $p= Publicacion::find($request->id);
        $seguidores=Seguidor::where("publicacion_id",$request->id)->get();
        //dd($seguidores->count());
        return view("usuario.mostrarFoto",
                ["publicacion"=>$p]);
    }
}
