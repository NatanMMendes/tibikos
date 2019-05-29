<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::group(['middleware' => 'auth'], function () {
	Route::get('/', 'TibikosController@dashboard')->name('home');

	/*Produtos*/
	Route::get('produtos', 'ProdutosController@produtos')->name('produtos');
	Route::get('manter-produto/{id_produto}', 'ProdutosController@manterProduto')->name('manterproduto');
	Route::get('excluir-produto/{id_produto}', 'ProdutosController@excluirProduto')->name('excluirproduto');
	Route::get('novo-produto', function () {return view('produtos.create');})->name('novo-produto');
	Route::post('criar-produto', 'ProdutosController@criarProduto')->name('criar-produto');
	Route::post('editar-produto', 'ProdutosController@editarProduto')->name('editar-produto');

	/*Localidades*/
	Route::get('locais', 'LocaisController@locais')->name('locais');
	Route::get('manter-local/{id_local}', 'LocaisController@manterLocal')->name('manterlocal');
	Route::get('excluir-local/{id_local}', 'LocaisController@excluirLocal')->name('excluirlocal');
	Route::get('novo-local', function () {return view('locais.create');})->name('novo-local');
	Route::post('criar-local', 'LocaisController@criarLocal')->name('criar-local');
	Route::post('editar-local', 'LocaisController@editarLocal')->name('editar-local');

	/*Fornecedores*/
	Route::get('fornecedores', 'FornecedoresController@fornecedores')->name('fornecedores');
	Route::get('manter-fornecedor/{id_fornecedor}', 'FornecedoresController@manterFornecedor')->name('manterfornecedor');
	Route::get('excluir-fornecedor/{id_fornecedor}', 'FornecedoresController@excluirFornecedor')->name('excluirfornecedor');
	Route::get('novo-fornecedor', function () {return view('fornecedores.create');})->name('novo-fornecedor');
	Route::post('criar-fornecedor', 'FornecedoresController@criarFornecedor')->name('criar-fornecedor');
	Route::post('editar-fornecedor', 'FornecedoresController@editarFornecedor')->name('editar-fornecedor');

	/*Estoque*/
	Route::get('estoque', 'EstoqueController@estoque')->name('estoque');
	Route::get('baixa-estoque', 'EstoqueController@baixa')->name('baixa-estoque');
	Route::get('devolucao-estoque', 'EstoqueController@devolucao')->name('devolucao-estoque');

	
	//Route::get('manter-fornecedor/{id_fornecedor}', 'FornecedorController@manterFornecedor')->name('manterfornecedor');
	//Route::get('excluir-fornecedor/{id_fornecedor}', 'FornecedorController@excluirFornecedor')->name('excluirfornecedor');
	//Route::get('novo-fornecedor', function () {return view('fornecedores.create');})->name('novo-fornecedor');
	//Route::post('criar-fornecedor', 'FornecedorController@criarFornecedor')->name('criar-fornecedor');
	//Route::post('editar-fornecedor', 'FornecedorController@editarFornecedor')->name('editar-fornecedor');

	/*Compra*/
	Route::get('compras', 'ComprasController@compras')->name('compras');
	Route::get('manter-compra/{id_compra}', 'ComprasController@manterCompra')->name('mantercompra');
	Route::get('excluir-compra/{id_compra}', 'ComprasController@excluirCompra')->name('excluircompra');
	Route::get('novo-compra', function () {return view('compras.create');})->name('novo-compra');
	Route::post('criar-compra', 'ComprasController@criarCompra')->name('criar-compra');
	Route::post('editar-compra', 'ComprasController@editarCompra')->name('editar-compra');

	
	Route::get('informacoes', function () {
		return view('pages.informacoes');
	})->name('informacoes');

});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

