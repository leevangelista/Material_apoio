<!DOCTYPE html>
<html>
<head>
    <title>Novo Veículo</title>
</head>
<body>

    <h1>Novo Veículo</h1>

    <form action="/veiculos" method="POST">

        @csrf

        <label>Placa:</label>
        <input type="text" name="placa">

        <br><br>

        <label>Marca:</label>
        <input type="text" name="marca">

        <br><br>

        <label>Modelo:</label>
        <input type="text" name="modelo">

        <br><br>

        <label>Cliente:</label>

        <select name="cliente_id">

            <option value="">
                Selecione um cliente
            </option>

            @foreach($clientes as $cliente)

                <option value="{{ $cliente->id }}">
                    {{ $cliente->nome }}
                </option>

            @endforeach

        </select>

        <br><br>

        <button type="submit">
            Cadastrar
        </button>

    </form>

    <br>

    <a href="/veiculos/listar">
        Voltar
    </a>

</body>
</html>