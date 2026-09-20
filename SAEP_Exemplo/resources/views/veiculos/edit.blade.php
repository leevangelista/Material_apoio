<!DOCTYPE html>
<html>
<head>
    <title>Editar Veículo</title>
</head>
<body>

    <h1>Editar Veículo</h1>

    <form action="/veiculos/{{ $veiculo->id }}" method="POST">

        @csrf
        @method('PUT')

        <label>Placa:</label>

        <input
            type="text"
            name="placa"
            value="{{ $veiculo->placa }}"
        >

        <br><br>

        <label>Marca:</label>

        <input
            type="text"
            name="marca"
            value="{{ $veiculo->marca }}"
        >

        <br><br>

        <label>Modelo:</label>

        <input
            type="text"
            name="modelo"
            value="{{ $veiculo->modelo }}"
        >

        <br><br>

        <label>Cliente:</label>

        <select name="cliente_id">

            @foreach($clientes as $cliente)

                <option
                    value="{{ $cliente->id }}"
                    {{ $veiculo->cliente_id == $cliente->id ? 'selected' : '' }}
                >
                    {{ $cliente->nome }}
                </option>

            @endforeach

        </select>

        <br><br>

        <button type="submit">
            Salvar
        </button>

    </form>

    <br>

    <a href="/veiculos/listar">
        Voltar
    </a>

</body>
</html>