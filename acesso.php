<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar - StoreManager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body class="acessoBody">

<nav class="navbar navbar-expand-lg mt-4" style="border-bottom: none; box-shadow: none;">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="assets/img/logo.png" alt="Logo" style="height:40px; margin-right:10px;">
            StoreManager
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="acesso.php">Entrar</a>
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

<div class="d-flex justify-content-center" style="margin-top: 7rem ">
    <div class="container-fluid" style="max-width: 800px;">
        <form class="p-4 formCadastroAcesso align-items-center" onsubmit="fazer_login(event)">
            <h4 class="text-center mb-4">StoreManager</h4>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" style="background-color: #24282d;" name="email" placeholder="Digite seu email" required>
            </div>

            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" name="senha" style="background-color: #24282d" placeholder="Digite sua senha" required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary w-50 botaoCadastroAcesso">Entrar</button>
            </div>
        </form>

        <div class="text-center animacaoPadrao">
            <p>
                Ainda não tem uma conta? <a style="font-weight: bold" class="link-light link-offset-3-hover link-underline
                                        link-underline-opacity-0 link-underline-opacity-75-hover" href="cadastro.php.php">Cadastre-se!
                </a>
            </p>
        </div>

    </div>
</div>

    <script>
        function fazer_login(e) {
            e.preventDefault();

            var dados = new FormData(e.target);

            Swal.fire({
                title: 'Entrando...',
                didOpen: () => { Swal.showLoading() }
            });

            fetch('ajax/login.php', {
                method: 'POST',
                body: dados
            })
                .then(response => response.json())
                .then(data => {
                    Swal.close();
                    if (data.status == 'sucesso') {
                        window.location.href = 'painel/index.php';
                    } else {
                        Swal.fire('Erro', data.msg, 'error');
                    }
                })
                .catch(error => {
                    Swal.close();
                    console.log(error);
                    Swal.fire('Erro', 'Falha na conexão!', 'error');
                });
        }
    </script>

</body>
</html>