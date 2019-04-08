@extends('adminlte::page')

@section('title', 'SmartStock')

@section('content')
<div class="container" style="padding-top: 1em;">
  <div class="modal fade" id="movimentacaoModal">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Movimentação</h5>
                  <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
              </div>
              <div class="row modal-body d-flex justify-content-center">
                  <div class="col">
                    <center>
                      <small class="text-muted">Titulo do produto</small>
                      <figure class="d-flex align-items-center">
                          <img src="https://c-lj.gnst.jp/public/img/common/noimage.jpg?20190126050058" alt="Imagem do produto" width="300" height="200" />
                      </figure>
                      </center>
                  </div><br>
                  <div class="col">
                      <form action="#" method="post" id="transactions">
                          @csrf
                          <div class="form-group">
                              <input type="number" class="form-control" name="product_id" value="" disabled placeholder="codigo" />
                          </div>
                          <div class="form-group">
                              <select class="form-control" name="action">
                                  <option value="entrada">Entrada</option>
                                  <option value="saida">Saída</option>
                                  <option value="estorno">Estorno</option>
                              </select>
                          </div>
                          <div class="form-group">
                              <input type="number" class="form-control" name="quantity" placeholder="Quantidade" required/>
                          </div>
                          <div class="form-group">
                              <input type="number" class="form-control" name="total" placeholder="Valor Total" readonly />
                          </div>
                          <div class="form-group">
                              <textarea class="form-control" name="description" rows="3" cols="23" placeholder="Observações"></textarea>
                          </div>
                          <div class="modal-footer">
                              <button type="submit" class="btn btn-primary">Salvar</button>
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="d-flex justify-content-between">
    <form>
      <div class="form-group">
        <div class="input-group">
            <input type="search" name="search" class="form-control" placeholder="Search">
            <button type="button" class="btn bg-cyan text-white fas fa-search"></button>
        </div>
      </div>
    </form>
  </div>
  <table class="table table-striped table-bordered" width="100">
    <thead>
      <tr>
        <th>DATA / HORA</th>
        <th>CÓDIGO</th>
        <th>PRODUTO</th>
        <th>QUANTIDADE</th>
        <th>VALOR UNIT.</th>
        <th>Categoria</th>
        <th>VALOR TOTAL</th>
        <th>Movimentação</th>
      </tr>
    </thead>
    <tbody><!--
      @@foreach($inputs as $input)
      <tr>
        <td>{ $input->created_at }}</td>
        <td>{ $input->product->id }}</td>
        <td>{ $input->product->name }}</td>
        <td>{ $input->quantity }}</td>
        <td>{ $input->price }}</td>
        <td>-------- { ucwords($input->getTable()) }}</td>
        <td>R$ { $input->total }}</td>
        <td><button data-toggle="modal" data-target="#movimentacaoModal" class="btn btn-success">
        <span class="fas fa-plus"></span>Movimentar</button></td>
      </tr>
      @@endforeach-->
    </tbody>
  </table>
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
<script type="text/javascript">
    $(document).ready(function(){
        $('select[name=action]').change(function(){

            var form = $('#transactions');
            var formAction = form.attr('action').split('/');

            formAction.pop();
            formAction.push($('select[name=action]').val());
            formAction = formAction.join('/');

            form.attr('action', formAction);
        });
    });
</script>
@endsection