<?php

namespace App\Http\Controllers;

use App\Models\EncargadoVehiculo;
use Illuminate\Http\Request;

class EmployesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{

            $employes = EncargadoVehiculo::all();
            return $employes;

        }catch(\throwable $th) {

            return response()->json([ 'erro' => $th->getMessage() ], 500);

        }
    }

    public function getById($id)
    {

        try{

            $data = EncargadoVehiculo::find($id);
            return response()->json($data, 200);

        }catch(\throwable $th) {

            return response()->json([ 'erro' => $th->getMessage() ], 500);

        }        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try{

            $data['cedula'] = $request['nombre'];
            $data['nombre'] = $request['apellido'];
            $data['apellido'] = $request['telefono'];
            $data['direccion'] = $request['telefono'];
            $data['ciudad'] = $request['telefono'];
            $data['tipo_propiedad'] = 1;
            if ($request['tipo_propiedad'] == 'Conductor')
            {
                $data['tipo_propiedad'] = 2;
            }
            $res = EncargadoVehiculo::create($data);
            return response()->json($res, 200);

        }catch(\throwable $th) {

            return response()->json([ 'erro' => $th->getMessage() ], 500);

        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EncargadoVehiculo  $encargadoVehiculo
     * @return \Illuminate\Http\Response
     */
    public function show(EncargadoVehiculo $encargadoVehiculo)
    {
        
        try{

            return view('employes.show');

        }catch(\throwable $th) {

            return response()->json([ 'erro' => $th->getMessage() ], 500);

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EncargadoVehiculo  $encargadoVehiculo
     * @return \Illuminate\Http\Response
     */
    public function edit(EncargadoVehiculo $encargadoVehiculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EncargadoVehiculo  $encargadoVehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EncargadoVehiculo $encargadoVehiculo)
    {
        try{

            $employe = EncargadoVehiculo::findOrFail($request->id);
            $employe->nombre = $request->nombre;
            $employe->apellido = $request->apellido;
            $employe->telefono = $request->telefono;

            $employe->save();

            return $employe;

        }catch(\throwable $th) {

            return response()->json([ 'erro' => $th->getMessage() ], 500);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EncargadoVehiculo  $encargadoVehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(EncargadoVehiculo $encargadoVehiculo)
    {
        try{

            $data = EncargadoVehiculo::find($id)->delete();
            return response()->json([ 'delete' => $data ], 200);

        }catch(\throwable $th) {

            return response()->json([ 'erro' => $th->getMessage() ], 500);

        } 
    }
}
