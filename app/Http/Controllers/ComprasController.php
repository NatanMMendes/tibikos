<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Models\CompraModel as Compra;


class ComprasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function compras()
    {
        $compras = Compra::paginate(15);
        return view('pages.compras', ['compras' => $compras]);
    }

    public function manterCompra(Request $request){
        
        $compra = Compra::where('idprod', $request->id_compra)->get()[0];
        return view('compras.edit', ['compra' => $compra]);
    }
    
    public function editarCompra(Request $request){
        
        try{
            $compra = Compra::where('idprod', $request->idprod)->get()[0];
            $compra->nome = $request->nome;
            $compra->marca = $request->marca;
            $compra->cor = $request->cor;
            $compra->tamanho = $request->tamanho;
            $compra->valoruni = $request->valoruni;

            $compra->save();
        }catch (Exception $e) {
            return redirect()->route('manter-compra' , $request->idprod);
        } 
        return redirect()->route('compras');
    }

    public function excluirCompra(Request $request){
        
        try{
            $compra = Compra::where('idprod', $request->id_compra)->get()[0];

            $compra->delete();
        }catch (Exception $e) {
            return redirect()->route('compras');
        } 
        return redirect()->route('compras');
    }

    public function criarCompra(Request $request)
    {
        try{
            $compra = new Compra;

            $compra->nome = $request->nome;
            $compra->marca = $request->marca;
            $compra->cor = $request->cor;
            $compra->tamanho = $request->tamanho;
            $compra->valoruni = $request->valoruni;

            $compra->save();
        }catch (Exception $e) {
            return redirect()->route('novo-compra');
        } 
        return redirect()->route('compras');
    }


}
