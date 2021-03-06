@extends('templates.template')

@section('content')

<div class="container">
  <div class="text-center">
    <h1>Novo Veiculo</h1>
  </div>

    @if(isset($errors) && count($errors)>0)
      <div class="text-center mt-4 mb-4 p-2 alert-danger">
          @foreach($errors->all() as $erro)
              {{$erro}}<br>
          @endforeach
      </div>
    @endif

  <form name="formCad" id="formCad" method="post" action="{{url('veiculos')}}" class="row g-3">
    @csrf
    <div class="col-12">
      <label for="inputMarca" class="form-label">Marca</label>
      <input type="text" class="form-control" name="marca" id="marca" required>
    </div>

    <div class="col-md-6">
      <label for="inputModelo" class="form-label">Modelo</label>
      <input type="text" class="form-control" name="modelo" id="modelo" required>
    </div>

    <div class="col-md-6">
      <label for="placa" class="form-label">Placa</label>
      <input type="text" class="form-control" name="placa" id="placa" required>
    </div>

    <div class="col-8">
      <label for="inputAno" class="form-label">Ano</label>
      <input type="text" class="form-control" name="ano" id="ano" required>
    </div>

    <div class="col-4">
      <label for="inputCor" class="form-label">Cor</label>
      <input type="text" class="form-control" name="cor" id="cor" required>
    </div>

    <select class="form-control" name="id_usuario" id="id_usuario" required>
      <option value="">Usuario</option>
      @foreach($usuarios as $usuario)
      <option value="{{$usuario->id}}">{{$usuario->nome}}</option>
      @endforeach
    </select>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
  </form>
</div>

@endsection
