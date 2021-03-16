@extends('layouts.sidebar')
@section('tudo')
<head>
<title>Cadastro do Funcionario</title>
<style>
.yeah {
  margin-top: 30px;
}
</style>
</head>
<link rel="stylesheet" href="../site/style.css">
<h1 class="text-center"> Cadastrar Funcionario </h1> <hr>
<div class="container"> 
<div class="text-center">
<a href="{{route('funcionarios.index')}}">
          <button class="btn btn-secondary">Voltar</button>
        </a>
<button type="submit" class="btn btn-success" form="criarFunc">Cadastrar</button>
</div>
<form action="{{route('funcionarios.store')}}" method="POST" id="criarFunc">

@CSRF
<div class="form-group">
  <h2>Dados Pessoais: </h2>  
    <div class="form-group col-md-6">
      <label for="nome">Nome</label>
      <input name="nome" type="text" class="form-control" id="nome" placeholder="Nome" required>
    </div>
    
    <div class="form-group col-md-4">
      <label for="rg">RG</label>
      <input name="rg" type="text" class="form-control" id="rg" placeholder="327920087" required>
    </div>
    <div class="form-group col-md-4">
      <label for="cpf">CPF</label>
      <input name="cpf" type="text" class="form-control" id="cpf" placeholder="58696256026" required>
    </div>
  <div class="form-group col-md-4">
      <label for="telefone">Telefone</label>
      <input name="telefone" type="text" class="form-control" id="telefone" placeholder="(44) 34434-6424" required>
    </div>
  <div class="form-group col-md-2">
      <label for="data">Data de Nascimento</label>
      <input name="data" type="date" class="form-control" id="data" required>
    </div>
    <div class="form-group col-md-2">
      <label for="sexo">Sexo</label>
      <select name="sexo" id="sexo" class="form-control" required>
        <option selected>Escolha...</option>
        <option value="Masculino">Masculino</option>
        <option value="Feminino">Feminino</option>
        </select>
    </div>
    <div class="form-group col-md-3">
      <label for="estado">UF</label>
      <select name="estado" id="estado" class="form-control" required>
        <option selected>Escolha...</option>
        <option value="AC">Acre</option>
	    <option value="AL">Alagoas</option>
	    <option value="AP">Amapá</option>
	    <option value="AM">Amazonas</option>
	    <option value="BA">Bahia</option>
	    <option value="CE">Ceará</option>
	    <option value="DF">Distrito Federal</option>
	    <option value="ES">Espírito Santo</option>
	    <option value="GO">Goiás</option>
	    <option value="MA">Maranhão</option>
	    <option value="MT">Mato Grosso</option>
	    <option value="MS">Mato Grosso do Sul</option>
	    <option value="MG">Minas Gerais</option>
	    <option value="PA">Pará</option>
	    <option value="PB">Paraíba</option>
	    <option value="PR">Paraná</option>
	    <option value="PE">Pernambuco</option>
	    <option value="PI">Piauí</option>
	    <option value="RJ">Rio de Janeiro</option>
	    <option value="RN">Rio Grande do Norte</option>
	    <option value="RS">Rio Grande do Sul</option>
	    <option value="RO">Rondônia</option>
	    <option value="RR">Roraima</option>
	    <option value="SC">Santa Catarina</option>
	    <option value="SP">São Paulo</option>
	    <option value="SE">Sergipe</option>
	    <option value="TO">Tocantins</option>
        </select>
    </div>
    <div class="form-group col-md-4">
      <label for="cidade">Cidade</label>
      <input name="cidade" type="text" class="form-control" id="cidade" placeholder="cidade" required>
    </div>
    <div class="form-group col-md-4">
      <label for="cep">Cep</label>
      <input name="cep" type="text" class="form-control" id="cep" placeholder="69918162" required>
    </div>
    <div class="form-group col-md-4">
      <label for="endereco">Endereço</label>
      <input name="endereco" type="text" class="form-control" id="endereco" placeholder="Bairro exemplo, Rua exemplo 2456" required>
    </div>
    <div class="form-group col-md-4">
      <label for="complemento">Complemento</label>
      <input name="complemento" type="text" class="form-control" id="complemento" placeholder="Apt...Casa...Etc" required>
    </div>
    <div class="form-group col-md-4">
      <label for="modalidade">Modalidade</label>
      <input name="modalidade" type="text" class="form-control" id="modalidade" placeholder="" required>
    </div>
    <div class="form-group col-md-4">
      <label for="salario">Salario</label>
      <input name="salario" type="text" class="form-control" id="salario" placeholder="" required>
    </div>
    <div class="form-group col-md-8">
    <label for="obs">Observação</label>
    <textarea name="obs" class="form-control" id="obs" rows="2" style="resize:none"></textarea>
  </div>
  
  </div>
  </div>
  <div class="container"> 
  <div class="form-group yeah">
    <h2>Cadastro Sistema:</h2>
    <div class="form-group col-md-4">
      <label for="email">Email</label>
      <input name="email" type="email" class="form-control" id="email" placeholder="exemplo@exemplo.com" required>
    </div>
    <div class="form-group col-md-4">
      <label for="senha">Senha</label>
      <input name="senha" type="password" class="form-control" id="senha" placeholder="" required>
    </div>
    </div>
    </div>
</form>
@endsection

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="{{ asset('../site/script.js') }}"></script>