<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
     <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-container">
        <form class="login-form">
            <h1>Login</h1>
            <h3>Seja Bem-Vindo(a)</h3></br>
            <div class="input-group">
                <label for="username">E-mail</label>
                <input type="email" id="username" placeholder="Digite seu e-mail" required>
            </div>
            <div class="input-group">
                <label for="password">Senha</label>
                <input type="password" id="password" placeholder="Digite sua senha" required>
            </div>
            <button type="submit">Entrar</button>
            <p class="signup-link">Não tem conta? <a href="cadastrar.php">Cadastre-se</a></p>
        </form>
    </div>
</body>
</html>