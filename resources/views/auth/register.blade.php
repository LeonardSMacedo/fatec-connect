<!DOCTYPE html>
<html>
<head>
    <title>Cadastro - FATEC CONNECT</title>
</head>
<body>
    <h1>Cadastro</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/register">
        @csrf

        <div>
            <label>Nome:</label>
            <input type="text" name="name" required>
        </div>

        <div>
            <label>E-mail institucional:</label>
            <input type="email" name="email" required>
        </div>

        <div>
            <label>Senha:</label>
            <input type="password" name="password" required>
        </div>

        <div>
            <label>Confirme a senha:</label>
            <input type="password" name="password_confirmation" required>
        </div>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
