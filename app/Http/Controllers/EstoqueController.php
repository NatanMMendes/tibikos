<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Models\EstoqueModel as Estoque;


class EstoqueController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function estoque()
    {
        $estoque = Estoque::join('produto', 'estoque.idp', '=', 'produto.idprod')->join('localidade', 'estoque.idl', '=', 'localidade.idloc')->get();
        return view('pages.estoque', ['estoque' => $estoque]);
    }

    public function manterProduto(Request $request){
        
        $produto = Estoque::where('idprod', $request->id_estoque)->get()[0];
        return view('estoque.edit', ['estoque' => $estoque]);
    }
    
    public function editarEstoque(Request $request){
        
        try{
            $estoque = Estoque::where('idprod', $request->idprod)->get()[0];
            $estoque->nome = $request->nome;
            $estoque->marca = $request->marca;
            $estoque->cor = $request->cor;
            $estoque->tamanho = $request->tamanho;
            $estoque->valoruni = $request->valoruni;

            $produto->save();
        }catch (Exception $e) {
            return redirect()->route('manter-estoque' , $request->idprod);
        } 
        return redirect()->route('estoque');
    }

    public function excluirEstoque(Request $request){
        
        try{
            $estoque = Estoque::where('idprod', $request->id_produto)->get()[0];

            $estoque->delete();
        }catch (Exception $e) {
            return redirect()->route('estoque');
        } 
        return redirect()->route('estoque');
    }

    public function criarEstoque(Request $request)
    {
        try{
            $estoque = new Estoque;

            $estoque->idest = $request->idest;
            $estoque->idp = $request->idp;
            $estoque->idl = $request->idl;
            $estoque->tamanho = $request->tamanho;
            $estoque->qtd = $request->qtd;

            $estoque->save();
        }catch (Exception $e) {
            return redirect()->route('novo-estoque');
        } 
        return redirect()->route('estoque');
    }


}
