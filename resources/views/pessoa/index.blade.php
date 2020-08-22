<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<h1>Pessoas Cadastradas</h1>

<a href="/pessoas/create" class="btn btn-info">Cadastrar nova pessoa</a>

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
            <a href="/pessoas/{{$p->id}}/edit" class="btn btn-info">Editar</a>
            <a href="/pessoas/{{$p->id}}" class="btn btn-danger">Excluir</a>

            {{-- <form action="/pessoas/{{ $p->id }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Excluir" class="btn btn-danger mt-2">
            </form> --}}
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
    color: #ba0d3e;
    font-family: 'Nunito', sans-serif;
    font-weight: 200;
    margin: 10px;
}

tr,td {                
    background-color: #222628;
    color: #5bc0de;
    font-family: 'Nunito', sans-serif;
    font-weight: 200;
    margin: 10px;
}

</style>