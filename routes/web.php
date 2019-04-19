<?php

//Auth::routes();

/********************************
 *          Produtos
 ********************************/

Route::get('/produtos', 'ProdutoController@index')->name('home');

/********************************
 *          Categoria
 ********************************/

Route::get('/produtos/categoria', 'CategoriaController@index')->name('categoria');

Route::post('/produtos/categoria/adicionar', 'CategoriaController@adicionar')->name('categoria.adicionar');

/********************************
 *          Fornecedor
 ********************************/

 Route::get('/fornecedores', 'FornecedorController@index')->name('fornecedor');

Route::get('/fornecedores/cadastro', 'FornecedorController@cadastro')->name('fornecedor.cadastro');

 Route::post('/fornecedores/adicionar', 'FornecedorController@adicionar')->name('fornecedor.adicionar');

 Route::post('/fornecedores/atualizar', 'FornecedorController@atualizar')->name('fornecedor.atualizar');

 Route::post('/fornecedores/deletar', 'FornecedorController@deletar')->name('fornecedor.deletar');

 