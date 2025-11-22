<?php
    require_once 'ver_sessao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel - <?php echo $_SESSION['nome_empresa']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="painel">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm mb-4" style="border-bottom: none; box-shadow: none;">
    <div class="container-fluid px-4">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="../assets/img/logo.png" alt="Logo" style="height:40px; margin-right:10px;">
            <span class="fw-bold">StoreManager</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarPainel">
            <ul class="navbar-nav nav-underline mx-auto mb-2 mb-lg-0 text-center">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="acesso.php">Caixa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Registro de vendas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Configurações</a>
                </li>
            </ul>
        </div>

        <div class="d-flex align-items-center justify-content-center mt-3 mt-lg-0">
            <div class="text-end text-white me-3 lh-1 d-none d-lg-block">
                <div class="fw-bold" style="font-size: 0.9rem;"><?php echo $_SESSION['nome_empresa']; ?></div>
                <small class="text-white-50" style="font-size: 0.75rem;">
                    <?php
                        $nome = $_SESSION['nome'];
                        $array = explode(" ", $nome);
                    ?>
                    Olá, <?php echo $array[0]; ?>! Como vai?
                </small>
            </div>
            <div class="position-relative">
                <?php if(!empty($_SESSION['logo'])): ?>
                    <img src="../<?php echo $_SESSION['logo']; ?>"
                         alt="Sua Logo"
                         class="rounded-circle border border-2 border-secondary"
                         style="width: 45px; height: 45px; object-fit: cover;">
                <?php else: ?>
                    <div class="rounded-circle bg-secondary d-flex align-items-center justify-content-center text-white border border-2 border-dark"
                         style="width: 45px; height: 45px;">
                        <i class="bi bi-shop fs-5"></i>
                    </div>
                <?php endif; ?>
                <span class="position-absolute bottom-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
            </div>
            <a href="../ajax/logout.php" class="btn btn-sm btn-outline-danger ms-3" title="Sair do Sistema">
                <i class="bi bi-box-arrow-right"></i>
            </a>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <h1>Bem-vindo(a) ao painel geral!</h1>
    <div class="container mt-5">
        <div class="card text-center mb-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
