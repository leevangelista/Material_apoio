<!DOCTYPE html>
<html>
<head>
    <title>Agendamentos</title>
</head>
<body>

    <h1>Agendamentos</h1>

    <a href="/principal">
        Voltar
    </a>

    <br><br>

    <a href="/agendamentos/create">
        <button>Novo Agendamento</button>
    </a>

    <br><br>

    <table border="1">

        <tr>
            <th>ID</th>
            <th>Data</th>
            <th>Hora</th>
            <th>Cliente</th>
            <th>Veiculo</th>
            <th>Descrição</th>
            <th>Ações</th>
        </tr>

        @foreach($agendamentos as $agendamento)

        <tr>

            <td>{{ $agendamento->id }}</td>

            <td>
                {{ date('d/m/Y', strtotime($agendamento->data)) }}
            </td>

            <td>
                {{ $agendamento->hora }}
            </td>

            <td>
                {{ $agendamento->veiculo->cliente->nome }}
            </td>

            <td>
                {{ $agendamento->veiculo->placa }}
            </td>

            <td>
                {{ $agendamento->descricao }}
            </td>

            <td>

                <a href="/agendamentos/{{ $agendamento->id }}/edit">
                    Editar
                </a>

                <form
                    action="/agendamentos/{{ $agendamento->id }}"
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