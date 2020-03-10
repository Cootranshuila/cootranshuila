<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Correo;

class PqrCorreosController extends Controller
{

    public function index()
    {
        return view('dashboard.pqr.correos');
    }

    public function reclamos()
    {
        $reclamos = Correo::paginate(10);
        return view('dashboard.pqr.reclamos', ['reclamos' => $reclamos]);
    }

    public function sugerencia()
    {
        $reclamos = Correo::paginate(10);
        return view('dashboard.pqr.sugerencias', ['reclamos' => $reclamos]);
    }

    public function quejas()
    {
        $reclamos = Correo::paginate(10);
        return view('dashboard.pqr.quejas', ['reclamos' => $reclamos]);
    }

    public function felicitaciones()
    {
        $reclamos = Correo::paginate(10);
        return view('dashboard.pqr.felicitaciones', ['reclamos' => $reclamos]);
    }

    public function tabla($tipo)
    {
        $correos = Correo::all()->where('clasificacion', $tipo);
        return ['correos' => $correos];
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
