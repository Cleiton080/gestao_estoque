<?php

namespace App\Http\Controllers;

use App\ProdutoModel;
use App\FornecedorModel;
use App\CategoriaModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdutoController extends Controller
{
    private $produtos;

    public function __construct(ProdutoModel $produtos)
    {
        $this->produtos = $produtos;
    }

    public function index()
    {
        return $this->produtos->all();
    }

    public function cadastro(FornecedorModel $fornecedores, CategoriaModel $categorias)
    {
        $fornecedores = $fornecedores->all();
        $categorias = $categorias->all();

        return view('cadastros.produto', compact('fornecedores', 'categorias'));
    }

    public function adicionar(Request $request)
    {
        $this->produtos->create($request->all());

        return 'Adicionado';
    }

    public function atualizar(Request $request)
    {
        $this->produtos->findOrfail($request->input('id'))->update($request->all());

        return 'Atualizado';
    }

    public function deletar(Request $request)
    {
        $this->produtos->findOrFail($request->input('id'))->delete();

        return 'Deletado';
    }
}
