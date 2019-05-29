<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Models\ComprasModel as Compra;
use App\Http\Models\FornecedoresModel as Fornecedor;
use App\Http\Models\EstoqueModel as Estoque;
use App\Http\Models\locaisModel as Locais;



use App\Http\Models\ProdutoModel as Produto;



class ComprasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function compras()
    {
        $compras = Compra::join('produto', 'pedido_compra.idpr', '=', 'produto.idprod')->join('fornecedor', 'pedido_compra.idfornc', '=', 'fornecedor.idforn')->paginate(15);
        return view('pages.compras', ['compras' => $compras]);
    }

    public function novaCompra(){
        $fornecedores = Fornecedor::all();
        $produtos = Produto::all();
        $locais = Locais::all();

        return view('compras.create', ['fornecedores' => $fornecedores ,'produtos' => $produtos ,'locais' => $locais ]);

    }

    public function manterCompra(Request $request){
        
        $compra = Compra::where('idpc', $request->id_compra)->get()[0];
        $fornecedores = Fornecedor::all();
        $produtos = Produto::all();
        $locais = Locais::all();

        return view('compras.edit', ['compra' => $compra ,'fornecedores' => $fornecedores ,'produtos' => $produtos , 'locais' => $locais]);
    }
    
    public function editarCompra(Request $request){
        
        try{
            $compra = Compra::where('idpc', $request->idpc)->get()[0];
            $oldStatus = $compra->estatus;
            $oldidpr = $compra->idpr;

            $compra->idfornc = $request->idfornc;
            $compra->idpr = $request->idpr;
            $compra->datapedido = $request->datapedido;
            $compra->dataentrega = $request->dataentrega;
            $compra->quantidade = $request->quantidade;
            $compra->valorpedido = $request->valorpedido;
            $compra->estatus = $request->estatus;

            if($oldidpr == $request->idpr){
                if($oldStatus == "E" && $request->estatus == "R"){

                    $estoque = Estoque::where('idp', $compra->idpr)->get();
                    if(!isset($estoque[0])){
                        $estoquenew = new Estoque;

                        $estoquenew->idp = $compra->idpr;
                        $estoquenew->idl = 1;
                        $estoquenew->qtd = $compra->quantidade ;
                        $estoquenew->save();
                    }else{
                        $estoque->qtd = $compra->quantidade + $estoque->qtd;
                        $estoque->save();

                    }
                   

                    
                }

                
                if($oldStatus== "R" && $request->estatus != "R"){
                    //Tirar
                }
            }

            $compra->save();
        }catch (Exception $e) {
            return redirect()->route('manter-compra' , $request->idpc);
        } 
        return redirect()->route('compras');
    }

    public function excluirCompra(Request $request){
        
        try{
            $compra = Compra::where('idpc', $request->id_compra)->get()[0];
            $compra->estatus = "C";

            $compra->save();
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
