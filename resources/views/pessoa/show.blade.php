<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

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
</style>