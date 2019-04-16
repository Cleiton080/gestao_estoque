<?php

namespace App\Http\Controllers;

use App\ProdutoModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdutoController extends Controller
{
    private $produtos;

    private $rotas;


    public function __construct(ProdutoModel $produtos, Routes $rotas)
    {
        $this->produtos = $produtos;
        $this->rotas = $rotas;
    }

    public function index()
    {
        
    }

    public function adicionar()
    {

    }

    public function atualizar()
    {
        
    }

    public function deletar()
    {

    }
}
