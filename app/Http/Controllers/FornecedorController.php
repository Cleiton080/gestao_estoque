<?php

namespace App\Http\Controllers;

use App\FornecedorModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FornecedorController extends Controller
{
    private $fornecedores;

    private $requisicao;

    public function __construct(FornecedorModel $fornecedores, Request $requisicao)
    {
        $this->fornecedores = $fornecedores;
        $this->requisicao = $requisicao;
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
        $this->fornecedores->findOrFail($this->requisicao->route('id'))->delete();

        return 'Fornecedor deletado';
    }

}
