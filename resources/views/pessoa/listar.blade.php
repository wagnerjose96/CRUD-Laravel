<html>
<head>
</head>
<body>
    <a href="/pessoa/form-cadastrar"></a>
    <h1>Lista de Pessoas</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Codigo</th>
                <th>CPF</th>
                <th>Data Nascimento</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pessoas as $pessoa)
                <tr>
                    <td>{{$pessoa->id}}</td>
                    <td>{{$pessoa->codigo}}</td>
                    <td>{{$pessoa->cpf}}</td>
                    <td>{{$pessoa->dataNacimento}}</td>
                    <td>
                        <a href="{{"/pessoa/{$pessoa->id}/form-aletar"}}">Editar</a>
                        <a href="{{"/pessoa/{$pessoa->id}/excluir"}}"
                            onclick="event.preventDefault();
                            if(confirm('Deseja excluir este registro?'))
                                {window.location.href='{{"/admin/client/{$client->id}/excluir"}}'}">
                            Excluir
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>