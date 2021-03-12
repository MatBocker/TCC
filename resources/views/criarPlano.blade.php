@extends('layouts.sidebar')
@section('tudo')
<head>
<title>Cadastro do Plano</title>
</head>
<link rel="stylesheet" href="../site/style.css">
<h1 class="text-center"> Cadastrar Plano </h1> <hr>


<div class="container"> 
<form action="{{route('planos.store')}}" method="POST">
@CSRF
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nome">Nome</label>
      <input name="nome" type="text" class="form-control" id="nome" placeholder="Nome" required>
    </div>
    
    <div class="form-group col-md-4">
      <label for="preco">Preço</label>
      <input name="preco" type="text" class="form-control" id="preco" placeholder="" required>
    </div>
    <div class="form-group col-md-3">
      <label for="tipo">Tipo</label>
      <select name="tipo" id="tipo" class="form-control" required>
        <option selected>Escolha...</option>
        <option value="Mensal">Mensal</option>
        <option value="Anual">Anual</option>
        </select>
    </div>
    <div class="form-group col-md-6">
    <label for="obs">Observação</label>
    <textarea name="obs" class="form-control" id="obs" rows="2"></textarea>
    </div>
    </div>
    <div class="text-center">
<button type="submit" class="btn btn-success">Cadastrar</button>
</div>
</form>
</div>
@endsection

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="{{ asset('../site/script.js') }}"></script>