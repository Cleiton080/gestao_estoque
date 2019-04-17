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

    public function __construct(FornecedorModel $fornecedores)
    {
        $this->fornecedores = $fornecedores;
    }

    public function index()
    {
        return $this->fornecedores;
    }

    public function cadastro()
    {
        return view('cadastros.fornecedor');
    }

    public function adicionar(Request $request, EnderecoModel $enderecos)
    {
        DB::beginTransaction();
        $fornecedor = $this->fornecedores->create($request->all());
        $fornecedor->contato()->create($request->all());
        
        if(!$endereco = $enderecos->postmon($request->input('cep'))):
            DB::rollback();
            return;
        endif;

        $fornecedor->endereco()->create($endereco);

        if($request->input('tipoPessoa') == 1):
                $fornecedor->fisico()->create($request->all());
        else:
            $fornecedor->juridico()->create($request->all());
        endif;
        DB::commit();

        return redirect()->back();
        
    }

    public function atualizar(Request $request, EnderecoModel $enderecos)
    {
        DB::beginTransaction();

        $this->fornecedores->findOrFail($request->input('id'))->update($request->all());
        $this->fornecedores->findOrFail($request->input('id'))->contato()->update($request->all());
        
        if(!$endereco = $nderecos->postmon($request->input('cep'))):
            DB::rollback();
            return;
        endif;
        
        $fornecedor->endereco()->create($endereco);
        DB::commit();

        return redirect()->back();

    }

    public function deletar(Request $request)
    {
        $this->fornecedores->findOrFail($request->route('id'))->delete();

        return redirect()->back();
    }

}
