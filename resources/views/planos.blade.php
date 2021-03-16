@extends('layouts.sidebar')
@section('tudo')
<head>
<title>Planos</title>
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
<h1 class="text-center"> Planos </h1> <hr>
      <div class="text-center">
        <a href="{{route('planos.create')}}">
          <button class="btn btn-success">Cadastrar</button>
        </a>
        <a href="{{route('planos.desativados')}}">
          <button class="btn btn-secondary">Desativados</button>
        </a>
      </div>  
 <div class="container">     
 @if(session('impossivelDeletarPlano'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>{{session('impossivelDeletarPlano')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if(session('planoDeletado'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('planoDeletado')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if(session('planoEditado'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('planoEditado')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if(session('planoCriado'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('planoCriado')}}</strong>
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
      <th scope="col" class="text-center">Preço</th>
      <th scope="col" class="text-center">Tipo</th>
      <th scope="col" class="text-center">Observação</th>
      <th scope="col" class="text-center">Ação</th>
    </tr>
  </thead>
  <tbody>
  
  @foreach($planos as $plano)
  @if($plano->deleted_at==null)
    <tr>
      <th scope="row">{{$plano->id}}</th>
      <td>{{$plano->nome}}</td>
      <td>{{$plano->preco}}</td>
      <td>{{$plano->tipo}}</td>
      <td>{{$plano->observacao}}</td>
      <td>
        <a href="{{route('planos.show',$plano->id)}}">
          <button class="btn btn-secondary">Exibir</button>
        </a>
        <a href="{{route('planos.edit',$plano->id)}}">
          <button class="btn btn-primary">Editar</button>
        </a>
        <form class="deletas" action="{{route('planos.destroy',$plano->id)}}" method="POST">  
        @method('delete')
        @CSRF
        <button type="submit" class="btn btn-danger" onclick="return confirm('Você tem certeza que deseja desativar o plano? ')">Desativar</button>
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