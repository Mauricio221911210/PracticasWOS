<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\UsuariosModel;

class JqueryController extends Controller
{
    public function js00(request $request){
        //dd($email);
        $usu = UusariosModel::where('email',$email)->get();
        return view("jquery/js_00")
        ->with(['usu' => $usu]);
    }

    public function js02(Request $request){ 
        if($request->ajax()){
               $municipios = MunicipiosModel::where('id_estados',$request->id_estado)->get();
               foreach ($municipios as $municipio){
                   $municipioshelp[$municipio->id_municipio] = $municipio->nombre;
               }
              return response ()->json($municipioshelp);
        }

    }
}
