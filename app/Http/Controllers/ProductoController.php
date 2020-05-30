<?php

namespace App\Http\Controllers;
use App\Models\Producto;

use App\Models\Categoria;
use App\Http\Requests\ProductoRequest;


use Illuminate\Http\Request;

class ProductoController extends Controller
{


  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos=Producto::all();
        
        return view('productos.index',['productos'=>$productos]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categoria=Categoria::all();
        return view('productos.create')
         ->with('categorias',$categoria);

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $datos=$request->all();
        $productos = new Producto;
        $productos->nombre=$request->input('nombre');
        $productos->descripcion=$request->input('descripcion');
        $productos->categoria_id=$request->input('categoria_id');      
        $productos->save();
    
        
        return redirect()->action('ProductoController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $categorias=Categoria::all();
        $producto=Producto::find($id);
        return view('productos.editar')->with('producto',$producto)       
        ->with('categorias',$categorias);
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
        $productos=Producto::find($id);
        $datos=array();
        $datos['nombre']=$request->input('nombre');
        $datos['descripcion']=$request->input('descripcion');
        $datos['categoria_id']=$request->input('categoria_id');
        $productos->update($datos); 
               
        return redirect()->action('ProductoController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $productos = Producto::find($id);
        $productos->delete();
        return redirect()->route('producto.index');
    }
}
