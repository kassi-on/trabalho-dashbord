<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="dash.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="tabelas.css">
<link rel="stylesheet" href="btn.css">
</head>
<body>
     <div class="dashboard-container">
     <?php include 'menu.php'; ?> 
<main>
    <div class= "header-content">
        <div class="header-title">
        <h2>Gestão de Categorias</h2>
        <p>Vizualize e gerencie as permissões dos usuários do sistema...</p>
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
                    <td><span class="badge inativo">Inativo</span></td>
                    <td><button class="btn-icon"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button class="btn-icon"><i class="fa-solid fa-trash"></i></button>
                        <button class="btn-icon"><i class="fa-solid fa-eye"></i></button>
                    </td>
                </tr>
        </table>
    </div>
</main>
</body>
</html>