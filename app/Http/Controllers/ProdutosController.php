<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Models\ProdutoModel as Produto;


class ProdutosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function produtos()
    {
        $produtos = Produto::paginate(15);
        return view('pages.produtos', ['produtos' => $produtos]);
    }

    public function manterProduto(Request $request){
        
        $produto = Produto::where('idprod', $request->id_produto)->get()[0];
        return view('produtos.edit', ['produto' => $produto]);
    }
    
    public function editarProduto(Request $request){
        
        try{
            $produto = Produto::where('idprod', $request->idprod)->get()[0];
            $produto->nome = $request->nome;
            $produto->marca = $request->marca;
            $produto->cor = $request->cor;
            $produto->tamanho = $request->tamanho;
            $produto->valoruni = $request->valoruni;

            $produto->save();
        }catch (Exception $e) {
            return redirect()->route('manter-produto' , $request->idprod);
        } 
        return redirect()->route('produtos');
    }

    public function excluirProduto(Request $request){
        
        try{
            $produto = Produto::where('idprod', $request->id_produto)->get()[0];

            $produto->delete();
        }catch (Exception $e) {
            return redirect()->route('produtos');
        } 
        return redirect()->route('produtos');
    }

    public function criarProduto(Request $request)
    {
        try{
            $produto = new Produto;

            $produto->nome = $request->nome;
            $produto->marca = $request->marca;
            $produto->cor = $request->cor;
            $produto->tamanho = $request->tamanho;
            $produto->valoruni = $request->valoruni;

            $produto->save();
        }catch (Exception $e) {
            return redirect()->route('novo-produto');
        } 
        return redirect()->route('produtos');
    }


}
