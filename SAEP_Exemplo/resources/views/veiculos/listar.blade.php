<!DOCTYPE html>
<html>
<head>
    <title>Veículos</title>
</head>
<body>

    <h1>Veículos</h1>

    <a href="/principal">
        Voltar
    </a>

    <br><br>

    <a href="/veiculos/create">
        <button>Novo Veículos</button>
    </a>

    <br><br>

    <table border="1">

        <tr>
            <th>ID</th>
            <th>Placa</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Cliente</th>
            <th>Ações</th>
        </tr>

        @foreach($veiculos as $veiculo)

        <tr>

            <td>{{ $veiculo->id }}</td>

            <td>{{ $veiculo->placa }}</td>

            <td>{{ $veiculo->marca }}</td>

            <td>{{ $veiculo->modelo }}</td>

            <td>
                {{ $veiculo->cliente->nome }}
            </td>

            <td>

                <a href="/veiculos/{{ $veiculo->id }}/edit">
                    Editar
                </a>

                <form
                    action="/veiculos/{{ $veiculo->id }}"
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