<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehiculo;

class VehiculosController extends Controller
{
    
    public function show()
    {

        try{

            return view('vehiculo.show');

        }catch(\throwable $th) {

            return response()->json([ 'erro' => $th->getMessage() ], 500);

        }

    }

    /*public function index()
    {

        try{

            $employes = Vehiculo::all();
            return $employes;

        }catch(\throwable $th) {

            return response()->json([ 'erro' => $th->getMessage() ], 500);

        }

    }*/

    /*public function add(Request $request)
    {

        try{

            $data['nombre'] = $request['nombre'];
            $data['apellido'] = $request['apellido'];
            $data['telefono'] = $request['telefono'];
            $res = Employe::create($data);
            return response()->json($res, 200);

        }catch(\throwable $th) {

            return response()->json([ 'erro' => $th->getMessage() ], 500);

        }

    }*/

    /*public function getById($id)
    {

        try{

            $data = Employe::find($id);
            return response()->json($data, 200);

        }catch(\throwable $th) {

            return response()->json([ 'erro' => $th->getMessage() ], 500);

        }        

    }

    public function update(Request $request, $id)
    {

        try{

            $employe = Employe::findOrFail($request->id);
            $employe->nombre = $request->nombre;
            $employe->apellido = $request->apellido;
            $employe->telefono = $request->telefono;

            $employe->save();

            return $employe;

        }catch(\throwable $th) {

            return response()->json([ 'erro' => $th->getMessage() ], 500);

        }

    }

    public function delete($id)
    {

        try{

            $data = Employe::find($id)->delete();
            return response()->json([ 'delete' => $data ], 200);

        }catch(\throwable $th) {

            return response()->json([ 'erro' => $th->getMessage() ], 500);

        }        

    }*/

}
