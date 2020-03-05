<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Correo;

class PqrCorreosController extends Controller
{

    public function index()
    {
        $correos = Correo::paginate(10)->onEachSide(1);
        return view('dashboard.pqr.correos', ['correos' => $correos]);
    }

    public function tabla($tipo)
    {
        $correos = Correo::paginate(10)->onEachSide(1);
        return ['correos' => $correos];
    }

    public function reclamos()
    {
        $reclamos = Correo::paginate(10);
        return view('dashboard.pqr.reclamos', ['reclamos' => $reclamos]);
    }

    public function buscador(Request $request)
    {
        $nombre=Correo::where("nombre_usu","like", $request->text."%")->take(5)->get();
        return view('dashboard.pqr.reclamos', ['reclamos' => $reclamos]);
    }
    
    public function create()
    {
        //
    }

    
    public function store($id)
    {
        // 
    }

    
    public function show($id)
    {
        $correo = Correo::findOrFail($id);
        return ['correo' => $correo];
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
