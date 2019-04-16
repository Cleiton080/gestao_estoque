<?php

//Auth::routes();

/********************************
 *          Produtos
 ********************************/

Route::get('/produtos', 'ProdutoController@index')->name('home');

/********************************
 *          Fornecedor
 ********************************/

 Route::get('/fornecedores', 'FornecedorController@index')->name('fornecedor');

 Route::get('/fornecedores/adicionar', 'FornecedorController@adicionar')->name('fornecedor.adicionar');

 Route::get('/fornecedores/deletar/{id}', 'FornecedorController@deletar')->name('fornecedor.deletar');

 