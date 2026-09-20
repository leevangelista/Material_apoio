<!DOCTYPE html>
<html>
<head>
    <title>Clínica Veterinária</title>
</head>
<body>

    <h1>Clínica Veterinária</h1>

    <h2>
        Bem-vindo, {{ session('usuario_nome') }}!
    </h2>

    <hr>

    <h3>Menu</h3>

    <a href="/clientes/listar">
        <button>Clientes</button>
    </a>

    <br><br>

    <a href="/veiculos/listar">
        <button>Veiculos</button>
    </a>

    <br><br>

    <a href="/agendamentos/listar">
        <button>Agendamentos</button>
    </a>

    <br><br>

    <form action="/logout" method="POST">
        @csrf
        <button type="submit">Sair</button>
    </form>

</body>
</html>