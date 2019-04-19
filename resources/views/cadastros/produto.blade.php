@extends('adminlte::page')@extends('adminlte::page')

@section('title', 'SmartStock')

@section('content')
@if(session('status'))
<div class="alert alert-success">
  <b>Sucesso!</b>
  <p>{{ session('status') }}</p>
</div>
@elseif($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li><br>
    @endforeach
  </ul>
</div>
@else
<div class="alert alert-warning">
  <b>Atenção</b>
  <p>Todos os campos marcados com um asterísco (<span class="text-danger">*</span>) possuí seu preenchimento obrigatório!</p>
</div>
@endif
<div class="container-fluid">
	<form action="{{ route('produto.adicionar') }}" method="post">
    @csrf
    <fieldset>
			<div class="row">
				<div class="col form-group">
	        <label for="codigo_barras">Código de Barras <small class="text-danger">*</small></label>
	        <input type="text" name="codigo_barras" class="form-control" id="codigo_barras" placeholder="" required />
	      </div>
				<div class="col form-group">
	        <label for="produto">Produto <small class="text-danger">*</small></label>
	        <input type="text" name="nome" class="form-control" id="produto" placeholder="Dobradiça 35 mm TN Slide On Slow Easy 105° Reta" required />
	      </div>
	      <div class="col form-group">
	        <label>Marca <small class="text-danger">*</small></label>
	        <input type="text" name="marca" class="form-control" id="marca" placeholder="" required />
	      </div>
      <div class="form-group">
       	<label for="descricao">Descrição <small class="text-danger">*</small></label>
        <textarea cols="68" rows="9" name="descricao" class="form-control"></textarea>
      </div>
    </div>
			<div class="row">
	      <div class="col-md-3 form-group">
	       	<label for="produtoMin">Estoque MIN. <small class="text-danger">*</small></label>
	       	<input type="number" class="form-control" name="quantidade_min" id="produtoMin" required />
	      </div>
	      <div class="col-md-3 form-group">
	       	<label for="produtoMax">Estoque MAX. <small class="text-danger">*</small></label>
	       	<input type="number" class="form-control" name="quantidade_max" id="produtoMax" required />
	      </div>
	      <div class="col-md-3 form-group">
					<label for="preco">Preço Pago R$<small class="text-danger">*</small></label>
					<div class="input-group">
						<input type="text" class="form-control" name="valor_pago" id="preco" />
					</div>
				</div>
	      <div class="col-md-3 form-group">
	       	<label for="preco">Preço R$<small class="text-danger">*</small></label>
						<input type="text" class="form-control" name="valor_venda" id="preco"  />
					</div>
        <div class="col-md-5 form-group">
          <label>Fornecedor</label>
            <select class="form-control" name="fornecedor">
                @foreach($fornecedores as $fornecedor)
                  <option value="{{ $fornecedor->id }}">{{ $fornecedor->nome }}</option>
                @endforeach
              </select>
              <div class="input-group-prepend">
                <a href="{{ url('fornecedor/cadastro') }}" class="btn btn-success"><span class="fas fa-plus"></span> Adicionar</a>
              </div>
          </div>
				</div>
      </div>
      <hr>
			<div class="row">
				<div class="col-md-12 form-group">
	       	<label for="local">Local de armazenamento <small class="text-danger">*</small></label>
	       	<input type="text" name="local" class="form-control" id="local" />
	      </div>
			</div>
    <div class="form-group">
      <label for="departamento">Categoria</label>
      <div class="col-md-12 input-group">
	     <select class="form-control" name="categoria">
	        @foreach($categorias as $categoria)
	         <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
	        @endforeach
	       </select>
          <div class="input-group-prepend">
    				<a href="#" class="btn btn-success" target="_blank"><span class="fas fa-plus"></span> Adicionar</a>
          </div>
        </div>
      </div>
      <div class="form-group">
       	<label for="ncm">NCM <small class="text-danger">*</small></label>
       	<input type="number" name="ncm" class="form-control" id="ncm"/>
			</div>
			<div class="form-group">
				<label for="img">Imagem</label>
				<input type="file" name="" class="form-control" id="img"/>
		 </div>
      <hr>
      <div class="form-group">
				<input type="reset" class="btn btn-danger" value="Cancelar"/>
       	<input type="submit" class="btn btn-primary" value="Cadastrar" />
      </div>
    </fieldset>
  </form>
</div>
<footer class="main-footer">
  <div class="pull-right hidden-xs">
      59780
  </div>
  <strong>Copyright &copy; 2019
</footer>
@endsection