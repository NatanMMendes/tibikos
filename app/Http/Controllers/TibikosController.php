<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Models\ProdutoModel as Produto;


class TibikosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function produtos()
    {
        $produtos = Produto::paginate(15);
        return view('pages.produtos', ['produtos' => $produtos]);
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

    public function localidades()
    {
        return view('pages.localidades');
    }

    public function compras()
    {
        return view('pages.compras');
    }

    public function fornecedores()
    {
        return view('pages.fornecedores');
    }

    public function relatorios()
    {
        return view('pages.relatorios');
    }

}
