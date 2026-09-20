<!DOCTYPE html>
<html>
<head>
    <title>Clientes</title>
</head>
<body>

    <h1>Clientes</h1>

    <a href="/principal">
        Voltar
    </a>

    <br><br>

    <a href="/clientes/create">
        <button>Novo Cliente</button>
    </a>

    <h2>Buscar Cliente</h2>

    <form action="/clientes/listar" method="GET">

        <input
            type="text"
            name="nome"
            placeholder="Digite o nome"
            value="{{ request('nome') }}"
        >

        <button type="submit">
            Pesquisar
        </button>

    </form>

    <br>

    <table border="1">

        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>

        @foreach($clientes as $cliente)

        <tr>

            <td>{{ $cliente->id }}</td>

            <td>{{ $cliente->nome }}</td>

            <td>{{ $cliente->cpf }}</td>

            <td>{{ $cliente->telefone }}</td>

            <td>{{ $cliente->email }}</td>

            <td>

                <a href="/clientes/{{ $cliente->id }}/edit">
                    Editar
                </a>

                <form
                    action="/clientes/{{ $cliente->id }}"
                    method="POST"
                    style="display:inline"
                >

                    @csrf
                    @method('DELETE')

                    <button type="submit">
                        Excluir
                    </button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

</body>
</html>