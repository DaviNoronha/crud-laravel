@extends('template.master')

@if (isset($pessoa))
@section('titulo', 'Editar Perfil')
@else
@section('titulo', 'Cadastrar Perfil')
@endif

@section('conteudo')

@if (isset($pessoa))
    <h1>Editar perfil de {{ $pessoa->nome }}</h1>
        <form action="/pessoas/ {{ $pessoa->id }}" method="post">
    @method('PUT')
@else
    <h1>Cadastrar novo perfil</h1>
        <form action="/pessoas" method="post">
@endif
    @csrf
    <input type="text" name="nome" value="{{ $pessoa->nome ?? ''}}"required>
    <input type="text" name="telefone" value="{{ $pessoa->telefone ?? ''}}" required>
    <input type="text" name="email" value="{{ $pessoa->email ?? ''}}" required>
    <button type="submit" class="btn btn-info" text="nome">Salvar</button>
</form>

<br>

<a href="/pessoas" class="btn btn-danger mt-2">Voltar</a>

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

</style>
@endsection