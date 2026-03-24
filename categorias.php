<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    
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
        <p>Vizualize e gerencie as categorias sistema...</p>
    </div>
        <a href="cad-usuario.php" class="btnadd"><i class="fa-solid fa-plus"></i>Adicionar Categorias</a>
    </div>
        <div class="table-responsive"> 
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>01</td>
                    <td>Kássio Adriano</td>
                    <td>Ativo</td>
                    <td><button class="btn-icon"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button class="btn-icon"><i class="fa-solid fa-trash"></i></button>
                        <button class="btn-icon"><i class="fa-solid fa-eye"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>02</td>
                    <td>Adriano</td>
                    <td>Inativo</td>
                    <td><button class="btn-icon"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button class="btn-icon"><i class="fa-solid fa-trash"></i></button>
                        <button class="btn-icon"><i class="fa-solid fa-eye"></i></button>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                    <tr>
                        <td colspan="6" align="right">Informações de categorias...</td>
                    </tr>
            </tfoot>
        </table>
    </div>
</main>
</div>
<?php include 'rodape.php'; ?>
</body>
</html>