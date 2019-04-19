<?php

namespace App\Http\Controllers;

use App\CategoriaModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriaController extends Controller
{
    private $categorias;

    public function __construct(CategoriaModel $categorias)
    {
        $this->categorias = $categorias;
    }

    public function index()
    {
        return $this->categorias->all();
    }

    public function adicionar(Request $request)
    {
        $this->categorias->create(['nome' => 'teste3', 'descricao' => 'teste3']);
        
        return 'CAtegoria adicionado!';
    }

    public function atualizar(Request $request)
    {
        $this->categorias->findOrFail($request->input('id'))->update($request->all());

        return 'Categoria atualizada!';
    }

    public function deletar()
    {
        $this->categorias->delete();

        return 'Deletado';
    }

}
