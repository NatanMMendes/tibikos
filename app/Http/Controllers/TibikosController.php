<?php

namespace App\Http\Controllers;

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
        return view('pages.produtos');
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
