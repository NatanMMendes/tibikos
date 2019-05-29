<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Models\LocaisModel as Local;


class LocaisController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function locais()
    {
        $locais = Local::paginate(15);
        return view('pages.localidades', ['locais' => $locais]);
    }

    public function manterLocal(Request $request){
        
        $local = Local::where('idloc', $request->id_local)->get()[0];
        return view('locais.edit', ['local' => $local]);
    }
    
    public function editarLocal(Request $request){
        
        try{
            $local = Local::where('idloc', $request->idloc)->get()[0];
            $local->endereco = $request->endereco;
            $local->tamanho = $request->tamanho;
            $local->status = $request->status;

            $local->save();
        }catch (Exception $e) {
            return redirect()->route('manter-local' , $request->idloc);
        } 
        return redirect()->route('locais');
    }

    public function excluirLocal(Request $request){
        
        try{
            $local = Local::where('idloc', $request->id_local)->get()[0];
            $local->status = "I";

            $local->save();
        }catch (Exception $e) {
            return redirect()->route('locais');
        } 
        return redirect()->route('locais');
    }

    public function criarLocal(Request $request)
    {
        try{
            $local = new Local;

            $local->endereco = $request->endereco;
            $local->tamanho = $request->tamanho;
            $local->status = $request->status;


            $local->save();
        }catch (Exception $e) {
            return redirect()->route('novo-local');
        } 
        return redirect()->route('locais');
    }


}
