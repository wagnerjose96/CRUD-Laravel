<html>
<head>
</head>
<body>
<h1>Cadastrar Pessoa</h1>
<form method="post" action="/pessoa/cadastrar">
    {!! csrf_field() !!}
    <label>ID</label>
    <input type="text">
    <label>Nome</label>
    <input type="text">
    <label>CPF</label>
    <input type="text">
    <label>Data Nacimento</label>
    <input type="text">
</form>
</body>
</html>