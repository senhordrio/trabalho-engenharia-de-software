<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Produto;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = Empresa::all()->toArray();
        return array_reverse($empresas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        $empresa = new Empresa([
           'nome' =>$request->input('nome'),
           'cnpj' =>$request->input('cnpj'),
           'endereco' =>$request->input('endereco'),
           'encargo' =>$request->input('encargo'),
           'telefone'=>$request->input('telefone')
        ]);

        $empresa->save();
        return response()->json('Empresa adicionada com sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresa = Empresa::find($id);
        return response()->json($empresa);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $empresa = Empresa::find($id);
        $empresa->update($request->all());
        return response()->json('Empresa editada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $empresa = Empresa::find($id);
        $empresa->delete();

        return response()->json('Empresa deletada com sucesso!');
    }
}
