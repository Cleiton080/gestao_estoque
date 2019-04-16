<?php

namespace App\Http\Controllers;

use App\EnderecoModel;
use App\FornecedorModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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

    public function adicionar(EnderecoModel $enderecos)
    {
        DB::beginTransaction();
        
        $fornecedor = $this->fornecedores->create($this->requisicao->all());
        $fornecedor->contato()->create($this->requisicao->all());

        if(!$endereco = $enderecos->postmon($this->requisicao->input('cep'))):
            DB::rollback();
            return;
        endif;

        $fornecedor->endereco()->create($endereco);

        DB::commit();

        return 'Fornecedor Adicionado';
        
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
