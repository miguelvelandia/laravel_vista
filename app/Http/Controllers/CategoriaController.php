<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Http\Requests\CategoriaRequest;

class CategoriaController extends Controller
{
    public function index(){
        
        $categorias=Categoria::all();
        return view('categorias.index' ,['categorias'=>$categorias]);
    }

	public function create(){
        $categorias=Categoria::all();
        return view('categorias.create');
    }

    public function store(CategoriaRequest $request){
        $categorias = new Categoria;
        $categorias->nombre = $request->input('nombre');
        $categorias->save();
        return redirect()->route('categoria.index');
    }

    public function edit($id){
        $categoria=Categoria::find($id);
        return view('categorias.editar')->with('categoria',$categoria);
    }

    public function update(CategoriaRequest $request,$id){
        $categoria=Categoria::find($id);
        
        $datos=array();
        $datos['nombre']=$request->input('nombre');
        $categoria->update($datos);
        return redirect()->route('categoria.index');
    }

    public function delete($id){
        $categoria=Categoria::find($id);
        $categoria->delete();
        return redirect()->route('categoria.index');
    }
}
