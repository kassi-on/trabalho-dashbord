<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta</title>
    <link rel="stylesheet" href="cadastro.css">

</head>
<body>
    <div class="register-container">
        <form class="register-form">
            <h1>Criar Conta</h1>
            
            <div class="input-group">
                <label for="fullname">Nome Completo</label>
                <input type="text" id="fullname" placeholder="Ex: Kássio Adriano" required>
            </div>

            <div class="input-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" placeholder="seu@email.com" required>
            </div>

            <div class="input-group">
                <label for="password">Senha</label>
                <input type="password" id="password" placeholder="Crie uma senha" required>
            </div>

            <div class="input-group">
                <label for="confirm-password">Confirmar Senha</label>
                <input type="password" id="confirm-password" placeholder="Repita a senha" required>
            </div>

            <button type="submit">Cadastrar</button>
            
            <p class="login-link">Já tem uma conta? <a href="login.php">Faça login</a></p>
        </form>
    </div>
</body>
</html>
