<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Correo;

class PqrCorreosController extends Controller
{

    public function index()
    {
        $correos = Correo::paginate(10);
        return view('dashboard.pqr.correos', ['correos' => $correos]);
    }

    public function reclamos()
    {
        $reclamos = Correo::paginate(10);
        return view('dashboard.pqr.reclamos', ['reclamos' => $reclamos]);
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
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
