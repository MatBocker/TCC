@extends('layouts.sidebar')
@section('tudo')
<head>
<title>Funcionários</title>
<style>

table {
  margin-top: 30px;
}

thead{
color: white;
background-color: #303030;
}

.alert {
  margin-top: 30px;
}

.deletas{
  display:inline;
}
</style>
</head>
<h1 class="text-center"> Funcionarios </h1> <hr>
      <div class="text-center">
        <a href="{{route('funcionarios.create')}}">
          <button class="btn btn-success">Cadastrar</button>
        </a>
        <a href="{{route('funcionarios.desativadosF')}}">
          <button class="btn btn-secondary">Desativados</button>
        </a>
      </div>  
 <div class="container">  
 @if(session('funcionarioEditado'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('funcionarioEditado')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if(session('funcionarioDeletado'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>{{session('funcionarioDeletado')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif        
<table class="table text-center table-bordered ">
  <thead class="text-center">
    <tr>
      <th scope="col" class="text-center">Id</th>
      <th scope="col" class="text-center">Nome</th>
      <th scope="col" class="text-center">CPF</th>
      <th scope="col" class="text-center">Sexo</th>
      <th scope="col" class="text-center">Email</th>
      <th scope="col" class="text-center">Salario</th>
      <th scope="col" class="text-center">Modalidade</th>
      <th scope="col" class="text-center">Ação</th>
    </tr>
  </thead>
  <tbody>
  
  @foreach($funcionarios as $funcionario)
    <tr>
    @if($funcionario->deleted_at==null)
      <th scope="row">{{$funcionario->id}}</th>
      <td>{{$funcionario->nome}}</td>
      <td>{{$funcionario->cpf}}</td>
      <td>{{$funcionario->sexo}}</td>
      <td>{{$funcionario->email}}</td>
      <td>{{$funcionario->salario}}</td>
      <td>{{$funcionario->modalidade}}</td>
      <td>
        <a href="{{route('funcionarios.show',$funcionario->id)}}">
          <button class="btn btn-secondary">Exibir</button>
        </a>
        <a href="{{route('funcionarios.edit',$funcionario->id)}}">
          <button class="btn btn-primary">Editar</button>
        </a>
        <form class="deletas" action="{{route('funcionarios.destroy',$funcionario->id)}}" method="POST">  
        @method('delete')
        @CSRF
        <button  type="submit" class="btn btn-danger" onclick="return confirm('Você tem certeza que deseja desativar o funcionario? ')">Desativar</button>
        </form>
      </td>
      @endif
    </tr>
    
    @endforeach
  </tbody>
</table>
</div>
<script>
$(".alert-dismissible").fadeTo(5000, 500).slideUp(500, function(){
    $(".alert-dismissible").remove();
});
</script>
@endsection