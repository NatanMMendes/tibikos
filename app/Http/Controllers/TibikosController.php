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

}
