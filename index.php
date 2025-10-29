<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

</head>
<body>

    <!-- ===== Navbar ===== -->
    <nav class="navbar navbar-expand-lg mt-4" style="border-bottom: none; box-shadow: none;">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="./assets/img/logo.png" alt="Logo" style="height:40px; margin-right:10px;">
                StoreManager
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Como Funciona</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Recursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Preços</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="d-flex justify-content-center align-items-center" style="padding-top: 15rem;
    animation: slideInFromRight 0.8s ease-out 0.5s forwards;
    opacity: 0;">
        <div class="text-start">
            <h2>Da prateleira ao caixa,</h2>
            <h2>tudo em um só lugar!</h2>
            <p>
                Simplificando a gestão de produtos e finanças
                para lojas.
            </p>
            <div class="d-grid gap-2 col-6 mx-auto pt-2">
                <button class="btn btn-primary comecar_agora" type="button">Vamos começar?</button>
            </div>
        </div>

    </div>

    <div class="d-flex justify-content-center mais_conteudo">
        <i class="bi bi-arrow-down" style="font-size: 2rem; color: #fff;"></i>
    </div>

    <section class="recursos" id="recursos">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col">
                    <div class="card mx-auto">
                        <img src="./assets/img/gestao.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text" style="font-size: 1.8rem">
                                Organize seus produtros de forma eficiente e controle o estoque.</p>
                        </div>
                    </div>
                </div>
                <div class="col ms-5">
                    <div class="card mx-auto">
                        <img src="./assets/img/financas.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text" style="font-size: 1.8rem">
                                Gerencie suas finanças com relatórios e gráficos detalhados
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col ms-5">
                    <div class="card mx-auto"">
                        <img src="./assets/img/vendas.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text" style="font-size: 1.8rem">
                                Acompanhe suas vendas e faturamento em tempo real
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="rodape" style="height: 10px; background-color: transparent"></div>

    <footer class="bg-white rodape-conteudo">
        <div class="container-fluid" style="padding-top: 2rem">

            <div class="row pb-2 text-start">

                <div class="col-2 ps-5">
                    <h6 class="fw-bold mb-3"">Links rápidos</h6>
                    <ul class="list-unstyled" >
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none botao_link">Início</a></li>
                        <li class="mb-2"><a href="#recursos" class="text-secondary text-decoration-none botao_link">Recursos</a></li>
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none botao_link">Preços</a></li>
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none botao_link">Suporte</a></li>
                    </ul>
                </div>

                <div class="col-3">
                    <h6 class="fw-bold mb-3">Informações de contato</h6>
                    <p class="text-secondary mb-1">
                        <i class="bi bi-envelope me-2"></i> suporte@daviladev.com
                    </p>
                    <p class="text-secondary mb-1">
                        <i class="bi bi-telephone me-2"></i> (35) 9 8426-3591
                    </p>
                </div>

                <div class="col-3">
                    <h6 class="fw-bold mb-3">Redes sociais</h6>
                    <div class="d-flex fs-4">
                        <a href="#" class="text-dark me-3"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-dark me-3"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="text-dark"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>

            </div>
            <div class="py-3 text-center">
                <p class="text-muted small mb-0">© 2025 StoreManager. Desenvolvido por Nicolas Dávila.</p>
            </div>

        </div>
    </footer>


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</html>