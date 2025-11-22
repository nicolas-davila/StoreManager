<?php
    require_once 'ver_sessao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel - <?php echo $_SESSION['empresa']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<h1>Bem vindo ao painel!</h1>

<?php if(!empty($_SESSION['logo'])): ?>
    <!-- Note o '../' antes do assets, pois estamos dentro da pasta painel -->
    <img src="../<?php echo $_SESSION['logo']; ?>" style="width:100px; height: 100px; border-radius: 50%; object-fit: cover">
<?php endif; ?>

<h2>Olá, <?php echo $_SESSION['nome']; ?></h2>

<hr>
<a href="produtos.php">Gerenciar Produtos</a> |
<a href="../ajax/logout.php">Sair</a>

</body>
</html>
