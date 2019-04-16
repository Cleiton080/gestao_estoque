<?php

//Auth::routes();

/********************************
 *          Produtos
 ********************************/

Route::get('/produtos', 'ProdutoController@index')->name('home');

/********************************
 *          Fornecedor
 ********************************/

 Route::get('/fornecedores', 'ProductController@index')->name('fornecedor');

 Route::get('/fornecedores/deletar/{id}', 'FornecedorController@deletar')->name('fornecedor.deletar');

 