<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Correo;

class PqrCorreosController extends Controller
{

    public function index()
    {
        //$correos = Correo::paginate(10);
        //dd(['correos' => $correos]);
        //dd($correos->links());
        return view('dashboard.pqr.correos');
    }

    public function tabla( $tipo, $texto)
    {
        if ($texto != "Todos") 
        {
            $correos = Correo::where([ ['clasificacion', $tipo], ["nom_cli_re","like", $texto."%"] ])->paginate(10);
            return ['correos' => $correos];
        } 
        else 
        {
            $correos = Correo::where('clasificacion', $tipo)->paginate(10);
            return ['correos' => $correos];
        }
    }

    public function paginacion(Request $request)
    {
        $correos = Correo::paginate(2);
        if($request->ajax()){
            return response()->json(['correos' => $correos]);
        }
    }
    
    public function show($id)
    {
        $correo = Correo::findOrFail($id);
        return ['correo' => $correo];
    }

    public function create()
    {
        //
    }

    
    public function store($id)
    {
        // 
    }

    
   

    
    public function edit($id)
    {
        
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
