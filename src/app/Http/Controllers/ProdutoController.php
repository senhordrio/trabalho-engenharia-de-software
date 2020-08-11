<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all()->toArray();
        return array_reverse($produtos);
    }

    public function add(Request $request)
    {
        $produto = new Produto([
            'nome' =>$request->input('nome'),
            'valor' =>$request->input('valor'),
            'quantidade' =>$request->input('quantidade')
        ]);
        $produto->save();
        return response()->json('Produto adicionado com sucesso!');
    }
    public function edit($id)
    {
       $produto = Produto::find($id);
       return response()->json($produto);
    }

    public function update($id, Request $request)
    {
        $produto = Produto::find($id);
        $produto->update($request->all());
        return response()->json('Produto editado com sucesso!');
    }

    public function delete($id)
    {
        $produto = Produto::find($id);
        $produto->delete();

        return response()->json('Produto deletado com sucesso!');
    }



}
