<?php

namespace Softcomun\Http\Controllers;

use Illuminate\Http\Request;
use Softcomun\Http\Requests;

use Softcomun\Proyecto;
use Softcomun\Tipotrabajador;

class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Proyecto::All();
        // dd($proyectos);
        return view("proyectos.index")->with([
             'proyectos' => $proyectos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proyecto = new Proyecto;
        return view("proyectos.create")->with([
            'proyecto' => $proyecto
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proyecto = new Proyecto;

        $proyecto->nombre = $request->nombre;
        $proyecto->propietario = $request->propietario;
        $proyecto->ubicacion = $request->ubicacion;
        $proyecto->descripcion = $request->descripcion;

        if($proyecto->save()){
            return redirect("/proyectos");
        }else{
            return view("/proyectos.create",["proyecto" => $proyecto]);
        }
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
