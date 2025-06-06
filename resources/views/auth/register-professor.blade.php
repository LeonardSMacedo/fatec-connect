<!DOCTYPE html>
<html>
<head>
    <title>Cadastro - FATEC CONNECT</title>
</head>
<body>
    <h1>Cadastro - Professor</h1>

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
            <label>E-mail institucional:</label>
            <input type="email" name="email" placeholder="email institucional Fatec" required>
        </div>

        <div>
            <label>Nome:</label>
            <input type="text" name="name" placeholder="Nome completo" required>
        </div>

        <div>
            <label>Whatsapp:</label>
            <input type="tel" name="telefone" placeholder="Telefone(whatsapp)" required>
        </div>

        <div>
            <label>Cidade:</label>
            <input type="text" name="city" placeholder="Cidade" required>
        </div>

        <div>
            <label for="estado">Estado:</label>
            <select id="estado" name="estado">
            <option value="sp">SP</option>
            </select>
        </div>

        <div>
            <label>Unidade Fatec:</label>
            <select name="unidade_id" required>
                <option value="">Selecione</option>
                @foreach ($unidades as $unidade)
                    <option value="{{ $unidade->id }}">{{ $unidade->nome }}</option>
                @endforeach
            </select>
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
