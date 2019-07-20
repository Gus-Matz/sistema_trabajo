<?php

namespace App\Http\Controllers;
use App\Empleado;

use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Este metodo manda a llamar al modelo "Empleado" con los datos almacenados en la base de datos
        // y los guarda en la variable "$empleados" y los ordena de forma descendente

        $empleados=Empleado::orderBy('id','ASC')->paginate(3);
        return view('Empleado.index',compact('empleados')); 
        //dd($empleados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // muestra el formulario creado diseñado en el index
        return view('Empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->toArray());
        $this->validate($request,[ 'nombre'=>'required', 'sexo'=>'required', 'tel'=>'required', 'fecha_nacimiento'=>'required']);
        Empleado::create($request->all());
        return redirect()->to('mostrar_registros')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 

        $empleado = Empleado::find($id);
        //dd($id);
        if (! $empleado) {
            //dd('no encontro empleado');
            return \Redirect::back()->with('flash_error', 'No se ha encontrado');
        }
        return view('Empleado.show',compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $empleado=Empleado::find($id);
        //dd($id);
        if (! $empleado) {
            //dd('no encontro empleado');
            return \Redirect::back()->with('flash_error', 'No se ha encontrado');
        }
        return view('Empleado.edit',compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
