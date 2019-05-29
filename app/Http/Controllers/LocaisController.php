<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Models\LocalModel as Local;


class LocaisController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function locais()
    {
        $locais = Local::paginate(15);
        return view('pages.locais', ['locais' => $locais]);
    }

    public function manterLocal(Request $request){
        
        $local = Local::where('idprod', $request->id_local)->get()[0];
        return view('locais.edit', ['local' => $local]);
    }
    
    public function editarLocal(Request $request){
        
        try{
            $local = Local::where('idprod', $request->idprod)->get()[0];
            $local->nome = $request->nome;
            $local->marca = $request->marca;
            $local->cor = $request->cor;
            $local->tamanho = $request->tamanho;
            $local->valoruni = $request->valoruni;

            $local->save();
        }catch (Exception $e) {
            return redirect()->route('manter-local' , $request->idprod);
        } 
        return redirect()->route('locais');
    }

    public function excluirLocal(Request $request){
        
        try{
            $local = Local::where('idprod', $request->id_local)->get()[0];

            $local->delete();
        }catch (Exception $e) {
            return redirect()->route('locais');
        } 
        return redirect()->route('locais');
    }

    public function criarLocal(Request $request)
    {
        try{
            $local = new Local;

            $local->nome = $request->nome;
            $local->marca = $request->marca;
            $local->cor = $request->cor;
            $local->tamanho = $request->tamanho;
            $local->valoruni = $request->valoruni;

            $local->save();
        }catch (Exception $e) {
            return redirect()->route('novo-local');
        } 
        return redirect()->route('locais');
    }


}
