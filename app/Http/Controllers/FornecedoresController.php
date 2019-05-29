<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Models\FornecedoresModel as Fornecedor;


class FornecedoresController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function fornecedores()
    {
        $fornecedores = Fornecedor::all();
        return view('pages.fornecedores', ['fornecedores' => $fornecedores]);
    }

    public function manterFornecedor(Request $request){
        
        $fornecedor = Fornecedor::where('idforn', $request->id_fornecedor)->get()[0];
        return view('fornecedores.edit', ['fornecedor' => $fornecedor]);
    }
    
    public function editarFornecedor(Request $request){
        
        try{
            $fornecedor = Fornecedor::where('idforn', $request->idforn)->get()[0];
            $fornecedor->nomeforn = $request->nomeforn;
            $fornecedor->cnpj = $request->cnpj;
            $fornecedor->endereco = $request->endereco;
            $fornecedor->email = $request->email;
            $fornecedor->telefone = $request->telefone;

            $fornecedor->save();
        }catch (Exception $e) {
            return redirect()->route('manter-fornecedor' , $request->idforn);
        } 
        return redirect()->route('fornecedores');
    }

    public function excluirFornecedor(Request $request){
        
        try{
            $fornecedor = Fornecedor::where('idforn', $request->id_fornecedor)->get()[0];

            $fornecedor->delete();
        }catch (Exception $e) {
            return redirect()->route('fornecedores');
        } 
        return redirect()->route('fornecedores');
    }

    public function criarFornecedor(Request $request)
    {
        try{
            $fornecedor = new Fornecedor;

            $fornecedor->nomeforn = $request->nomeforn;
            $fornecedor->cnpj = $request->cnpj;
            $fornecedor->endereco = $request->endereco;
            $fornecedor->telefone = $request->telefone;
            $fornecedor->email = $request->email;

            $fornecedor->save();
        }catch (Exception $e) {
            return redirect()->route('novo-fornecedor');
        } 
        return redirect()->route('fornecedores');
    }


}
