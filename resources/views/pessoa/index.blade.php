@extends('layouts.app')

{{-- @section('titulo', 'Cadastro') --}}

@section('content')

<h1>Pessoas Cadastradas</h1>

<a href="/pessoas/create" class="btn btn-primary">Cadastrar nova pessoa</a>

<hr>

<table class="table table-bordered table-dark">
    <tr>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    @foreach($pessoas as $p)
    <tr>
        <td>{{ $p->nome}}</td>
        <td>{{ $p->telefone}}</td>
        <td>{{ $p->email}}</td>
        <td>
            <a href="/pessoas/{{$p->id}}/edit" class="btn btn-primary">Editar</a>
            <a href="/pessoas/{{$p->id}}" class="btn btn-danger">Excluir</a>
        </td>
    </tr>
    @endforeach
</table>

<style>
html, body {
    background-color: #222628;
    color: #fff;
    font-family: 'Nunito', sans-serif;
    font-weight: 200;
    height: 100vh;
    margin: 10px;
}

h1 {
    color: #fff;
    font-family: 'Nunito', sans-serif;
    font-weight: 200;
}

tr,th {
    background-color: #222628;
    color: #fff;
    font-family: 'Nunito', sans-serif;
    font-weight: 200;
    margin: 10px;
}

tr,td {                
    background-color: #222628;
    color: #fff;
    font-family: 'Nunito', sans-serif;
    font-weight: 200;
    margin: 10px;
}

</style>
@endsection