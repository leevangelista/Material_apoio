<!DOCTYPE html>
<html>
<head>
    <title>Editar Cliente</title>
</head>
<body>

    <h1>Editar Cliente</h1>

    <form action="/clientes/{{ $cliente->id }}" method="POST">

        @csrf
        @method('PUT')

        <label>Nome:</label>

        <input
            type="text"
            name="nome"
            value="{{ $cliente->nome }}"
        >

        <br><br>

        <label>CPF:</label>

        <input
            type="text"
            name="cpf"
            value="{{ $cliente->cpf }}"
        >

        <br><br>

        <label>Telefone:</label>

        <input
            type="text"
            name="telefone"
            value="{{ $cliente->telefone }}"
        >

        <br><br>

        <label>E-mail:</label>

        <input
            type="email"
            name="email"
            value="{{ $cliente->email }}"
        >

        <br><br>

        <button type="submit">
            Salvar
        </button>

    </form>

    <br>

    <a href="/clientes/listar">
        Voltar
    </a>

</body>
</html>