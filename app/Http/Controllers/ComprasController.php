<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Models\ComprasModel as Compra;


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
        
        $compra = Compra::where('idpc', $request->id_compra)->get()[0];
        return view('compras.edit', ['compra' => $compra]);
    }
    
    public function editarCompra(Request $request){
        
        try{
            $compra = Compra::where('idpc', $request->idpc)->get()[0];
            $compra->idfornc = $request->idfornc;
            $compra->idpr = $request->idpr;
            $compra->datapedido = $request->datapedido;
            $compra->dataentrega = $request->dataentrega;
            $compra->quantidade = $request->quantidade;
            $compra->valorpedido = $request->valorpedido;
            $compra->estatus = $request->estatus;

            $compra->save();
        }catch (Exception $e) {
            return redirect()->route('manter-compra' , $request->idpc);
        } 
        return redirect()->route('compras');
    }

    public function excluirCompra(Request $request){
        
        try{
            $compra = Compra::where('idpc', $request->id_compra)->get()[0];

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
            
            $compra->idfornc = $request->idfornc;
            $compra->idpr = $request->idpr;
            $compra->datapedido = $request->datapedido;
            $compra->dataentrega = $request->dataentrega;
            $compra->quantidade = $request->quantidade;
            $compra->valorpedido = $request->valorpedido;
            $compra->estatus = $request->estatus;

            $compra->save();
        }catch (Exception $e) {
            return redirect()->route('novo-compra');
        } 
        return redirect()->route('compras');
    }


}
