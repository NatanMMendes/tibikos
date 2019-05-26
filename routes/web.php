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

	Route::get('produtos', 'TibikosController@produtos')->name('produtos');

	Route::get('manter-produto/{id_produto}', 'TibikosController@manterProduto')->name('manterproduto');

	Route::get('excluir-produto/{id_produto}', 'TibikosController@excluirProduto')->name('excluirproduto');
	Route::get('novo-produto', function () {
		return view('produtos.create');
	})->name('novo-produto');

	Route::post('criar-produto', 'TibikosController@criarProduto')->name('criar-produto');

	Route::post('editar-produto', 'TibikosController@editarProduto')->name('editar-produto');

	Route::get('estoque', 'TibikosController@estoque')->name('estoque');

	Route::get('fornecedores', 'TibikosController@fornecedores')->name('fornecedores');

	Route::get('compras', 'TibikosController@compras')->name('compras');

	Route::get('localidades', 'TibikosController@localidades')->name('localidades');

	Route::get('relatorios', 'TibikosController@relatorios')->name('relatorios');

	





	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

