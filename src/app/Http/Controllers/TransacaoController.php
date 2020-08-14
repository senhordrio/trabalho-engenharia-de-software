<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transacao;


class TransacaoController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transacoes = Transacao::all()->toArray();
        return array_reverse($transacoes);
    }

    public function add(Request $request)
    {
        $transacao = new Transacao([
            'empresa' => $request->input('empresa'),
            'produto' => $request->input('produto'),
            'quantidade' => $request->input('quantidade'),
            'data' => $request->input('data'),
            'valor' => $request->input('valor'),
            'condicao' => '0'
        ]);
        $transacao->save();
        return response()->json('Transacão adicionada com sucesso!');
    }
    public function edit($id)
    {
       $transacao = Transacao::find($id);
       return response()->json($transacao);
    }

    public function update($id, Request $request)
    {
        $transacao = Transacao::find($id);
        $transacao->update($request->all());
        return response()->json('Transacão editada com sucesso!');
    }

    public function delete($id)
    {
        $transacao = Transacao::find($id);
        $transacao->delete();

        return response()->json('Transacão deletada com sucesso!');
    }

    public function condicao($id)
    {
        $condicao = Transacao::find($id);
        return response()->json($condicao->condicao);
    }
}
