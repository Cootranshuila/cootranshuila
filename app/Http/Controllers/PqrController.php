<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PqrController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:admin','permission:universal']);
    }
    
    public function index()
    {
        return view('dashboard.pqr.index');
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
