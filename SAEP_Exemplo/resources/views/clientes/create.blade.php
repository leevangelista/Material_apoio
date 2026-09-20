<!DOCTYPE html>
<html>
<head>
    <title>Novo Cliente</title>
</head>
<body>

    <h1>Novo Cliente</h1>

    <form action="/clientes" method="POST">

        @csrf

        <label>Nome:</label>
        <input type="text" name="nome">

        <br><br>

        <label>CPF:</label>
        <input type="text" name="cpf">

        <br><br>

        <label>Telefone:</label>
        <input type="text" name="telefone">

        <br><br>

        <label>E-mail:</label>
        <input type="email" name="email">

        <br><br>

        <button type="submit">
            Cadastrar
        </button>

    </form>

    <br>

    <a href="/clientes/listar">
        Voltar
    </a>

</body>
</html>