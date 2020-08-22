@extends('template.master')

@section('titulo', 'Excluir Contato')

@section('conteudo')

<h1>Deseja mesmo exluir '{{$pessoa->nome}}' ?</h1>

<form action="/pessoas/{{ $pessoa->id }}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="Sim" class="btn btn-danger mt-2">
</form>

<a class="btn btn-info" href="/pessoas">Não</a>

<style>
    
html, body {
    background-color: #222628;
    color: #fff;
    font-family: 'Nunito', sans-serif;
    font-weight: 200;
    height: 100vh;
    margin: 10px;
}
</style>
@endsection