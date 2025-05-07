<!DOCTYPE html>
<html>
<head>
    <title>Login - FATEC CONNECT</title>
</head>
<body>
    <h1>Login</h1>

    @if ($errors->any())
        <div style="color: red;">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="/login">
        @csrf
        <div>
            <label for="email">E-mail:</label>
            <input type="email" name="email" required>
        </div>

        <div>
            <label for="password">Senha:</label>
            <input type="password" name="password" required>
        </div>

        <button type="submit">Entrar</button>
    </form>
</body>
</html>
