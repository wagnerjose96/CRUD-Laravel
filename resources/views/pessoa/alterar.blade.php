<html>
<head>
</head>
<body>
<h1>Alterar Pessoa</h1>
<form method="post" action="{{ "/pessoa/{$pessoa->id}/alterar" }}">
    {!! csrf_field() !!}
    <label>ID</label>
    <input type="text" value="{{$cliente->id}}">
    <label>Nome</label>
    <input type="text" value="{{$pessoa->nome}}">
    <label>CPF</label>
    <input type="text" value="{{$pessoa->cpf}}">
    <label>Data Nacimento</label>
    <input type="text" value="{{$pessoa->dataNascimento}}">
</form>
</body>
</html>