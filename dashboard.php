<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="dash.css">
</head>
<body>
    <div class="dashboard-container">
        <?php include 'menu.php'; ?>        
        <main>
            <section class="container-cards">
                
                <article>
                    <h2>Módulo de Usuários</h2>
                    <p>Gerencie os acessos e permissões do sistema nesta área.</p>
                    <a href="usuarios.php" class="btn">Acessar</a>
                </article>

                <article>
                    <h2>Acessas dados pessoais</h2>
                    <p>verifique se todos os seus dados se estão corretos.</p>
                    <a href="#" class="btn">Acessar</a>
                </article>

                <article>
                    <h2>Relatórios</h2>
                    <p>Visualize estatísticas e métricas detalhadas do sistema.</p>
                    <a href="#" class="btn">Acessar</a>
                </article>

            </section>
        </main>
    </div>
    <?php include 'rodape.php'; ?>
</body>
</html>
