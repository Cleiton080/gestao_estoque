@extends('adminlte::page')

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
<div class="container" style="padding-top: 1em;">
  <form role="form" action="{{ route('fornecedor.adicionar') }}" method="post">
    @csrf
    <fieldset>
      <div class="row">
        <div class="col-md-6 form-group" id="tipoPessoa">
          <label for="cnpj">CNPJ <small class="text-danger">*</small></label>
          <input type="number" name="cnpj" class="form-control" id="cnpj"/>
        </div>
        <div class="col-md-3 form-group">
          <label>Tipo</label><br>
          <select class="form-control" name="tipoPessoa">
            <option value="0">Jurídica</option>
            <option value="1">Física</option>
          </select>
        </div>
      </div>
      <div class="row">
      <div class="col-md-6 form-group" id="fieldCompName">
        <label for="razao_social">Razão Social</label>
        <input type="text" name="razao_social" class="form-control" id="razao_social"/>
      </div>
      <div class="col-md-5 form-group">
        <label for="nome">Nome <small class="text-danger">*</small></label>
        <input type="text" name="nome" class="form-control" id="nome" required />
      </div>
      </div>
    </fieldset>
    <hr>
    <fieldset>
      <div class="row">
        <div class="col-md-5 form-group">
          <label for="telefone">Telefone</label>
          <input type="number" name="telefone" class="form-control" id="telefone" />
        </div>
        <div class="col-md-5 form-group">
          <label>Celular</label>
          <input type="number" name="celular" class="form-control" id="celular" />
        </div>
      <div class="col-md-5 form-group">
        <label for="email">E-mail</label>
        <input type="email" name="email" class="form-control" id="email" />
      </div>
    </div>
    </fieldset>
    <hr>
    <fieldset>
      <div class="form-group">
        <label for="cep">CEP <small class="text-danger">*</small></label>
        <div class="input-group">
          <input type="number" name="cep" class="form-control" id="cep" required />
          <div class="input-group-prepend">
            <button type="button" class="btn btn-outline-primary" onclick="checkCep(event);">Verificar Cep</button>
          </div>
        </div>
        <small class="text-danger" id="cepError"></small>
      </div>
      <div class="row">
        <div class="col-md-5 form-group">
          <label for="estado">Estado <small class="text-danger">*</small></label>
          <input type="text" name="estado" class="form-control" id="estado" required disabled />
        </div>
        <div class="col-md-5 form-group">
          <label for="cidade">Cidade <small class="text-danger">*</small></label>
          <input type="text" name="cidade" class="form-control" id="cidade" required disabled />
        </div>
        <div class="col-md-5 form-group">
          <label for="bairro">Bairro <small class="text-danger">*</small></label>
          <input type="text" name="bairro" class="form-control" id="bairro"  required disabled />
        </div>
        <div class="col-md-5 form-group">
          <label for="endereco">Endereço <small class="text-danger">*</small></label>
          <input type="text" name="logradouro" class="form-control" id="endereco" required disabled />
        </div>
      </div>
    </fieldset>
    <br>
    <hr>
    <div class="form-group">
      <input type="reset" value="Cancelar" class="btn btn-danger" />
      <input type="submit" value="Cadastrar" class="btn btn-primary" />
    </div>
  </form>
  </div>
  </div>

<footer class="main-footer">
  <div class="pull-right hidden-xs">
      59780
  </div>
  <strong>Copyright &copy; 2019
</footer>
@endsection

@section('js')
<!--<script type="text/javascript" src="{{ asset('js/registerForm.js') }}"></script>-->

<script type="text/javascript">
    function checkCep(event){
  
      event.srcElement.textContent = 'Loading...';
  
      $.ajax({
  
            url: 'https://api.postmon.com.br/v1/cep/' + $('#cep').val(),
            dataType: 'json',
            success: function(data){
  
          $("#estado").val(data.estado);
          $("#cidade").val(data.cidade);
          $("#bairro").val(data.bairro);
          $("#endereco").val(data.logradouro);
  
        }
        }).always(function(){
        event.srcElement.textContent = 'Verificar Cep';
      }).fail(function(){
        $('#cepError').html('Hoveram erros na verificação do cep!');
      }).done(function(){
        $('#cepError').html('');
      });
  
    }
    </script>
@endsection