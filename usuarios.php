<head>
<link rel="stylesheet" href="tabelas.css">
<link rel="stylesheet" href="dash.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
 <div class="dashboard-container">
  <nav>
            <ul>
                <li><a href="dashboard.php">Início</a></li>
                <li><a href="usuarios.php">Usuários</a></li>
                <li><a href="#">Relatórios</a></li>
                <li><a href="#">Configurações</a></li>
            </ul>

            <div class="perfil-usuario">
                <img src="https://ui-avatars.com/api/?name=Kassio+Adriano&background=008080&color=fff" alt="Avatar">
                <span>Kássio</span>
            </div>
        </nav>
<main>
    <div class="dashboard-header">
        <div class="btn-newuser">
        </div>
        <a href="cad-usuario.php" class="btn-novo-usuario">
            <i class="fa-solid fa-user-plus"></i> Cadastrar Usuário
        </a>
    </div>
    <div class= "header-content">
        <h2>Gestão de Usuários</h2>
        <p>Vizualize e gerencie as permissões dos usuários do sistema.</p>
    </div>
        <div class="table-responsive"> 
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Acesso</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td>01</td>
                <td>Kássio Adriano</td>
                <td>kassio@unifev.edu.br</td>
                <td>Admnistrador</td>
                <td><span class="badge ativo">Ativo</span></td>
                <td><button class="btn-icon"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="btn-icon"><i class="fa-solid fa-trash"></i></button>
                    <button class="btn-icon"><i class="fa-solid fa-eye"></i></button>
                </td>
            </tr>
            <tr>
                <td>02</td>
                <td>Adriano</td>
                <td>adriano.silva@emaiil.com</td>
                <td>Editor</td>
                <td>Ativo</td>
                <td><button class="btn-icon"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="btn-icon"><i class="fa-solid fa-trash"></i></button>
                    <button class="btn-icon"><i class="fa-solid fa-eye"></i></button>
                </td>
            </tr>
        </tbody>
    </table>
  </div>
</main>
</div>
<?php include 'rodape.php'; ?>