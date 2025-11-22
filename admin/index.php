<?php
    require_once 'ver_admin.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Super Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-dark text-white">
<div class="container mt-5">
    <h1 class="text-danger">Painel do Super Admin 🕵️‍♂️</h1>
    <p>Bem vindo, Chefe <strong><?php echo $_SESSION['nome']; ?></strong>.</p>

    <div class="card text-dark mt-4">
        <div class="card-body">
            <h3>Controle Geral</h3>
            <p>Aqui você vê todos os lojistas cadastrados.</p>
            <button class="btn btn-outline-danger">Ver Lojistas</button>
        </div>
    </div>

    <br>
    <a href="../ajax/logout.php" class="text-white">Sair</a>
</div>
</body>
</html>
