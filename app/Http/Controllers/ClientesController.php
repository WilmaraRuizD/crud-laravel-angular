<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\clientes;
use App;
use view;
use Illuminate\support\facades\Storage;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {    $clientes['clientes']=clientes::paginate(10);

          return view('clientes.index',$clientes);//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes/create');
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//
$campos=[
  'nombre'=>'required | string |max:20 ',
  'apellido'=>'required | string |max:20 ',
  'Nidentificacion'=>'required | string |max: 20 ',
  'telefono'=>'required | string |max:5 ',
  'celular1'=>'required | string |max:7 ',
  'celular2'=>'required | string |max:7 ',
  'email'=>'required | email',
  'salario'=>'required | string |max: 20 ',
];
$mensaje=["require"=>'El atributo es requerido'];

$this->validate($request,$campos,$mensaje);



  //$datosCliente=request()->all();
  $datosCliente=request()->except('_token');
  clientes::insert($datosCliente);


return redirect('clientes')->with('mensaje','Cliente agregado con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(clientes $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
$clientes=clientes::findOrFail($id);

    $clientes=clientes::findOrFail($id);
    return view('clientes.edit',compact('clientes'))

    ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $datosCliente=request()->except(['_token','_method']);
          clientes::where('id','=',$id)->update($datosCliente);

          //$clientes=clientes::findOrFail($id);
        //  return view('clientes.edit',compact('clientes'));

        return redirect('clientes')->with('mensaje','Cliente modificado con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    clientes::destroy($id);
    return redirect('clientes');    //
    }
}
