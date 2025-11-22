<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="cadastroBody">

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
                        <a class="nav-link" href="acesso.php">Entrar</a>
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
            <form class="p-4 formCadastroAcesso align-items-center" onsubmit="cadastrar_lojista(event)">
                <h4 class="text-center mb-4">Vamos criar sua conta?</h4>
                <div class="mb-3">
                    <label for="nome" class="form-label">Seu Nome</label>
                    <input type="text" class="form-control" style="background-color: #24282d;" name="nome" placeholder="Nome Completo" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" style="background-color: #24282d;" name="email" placeholder="seuEmail@exemplo.com" required>
                </div>

                <div class="mb-3">
                    <label for="nomeEmpresa" class="form-label">Nome da Empresa/Comércio</label>
                    <input type="text" class="form-control" style="background-color: #24282d;"name="nome_empresa" placeholder="Ex: Moda & Estilo" required>
                </div>

                <div class="mb-3">
                    <label for="logotipo" class="form-label">Logotipo da Empresa/Comércio</label>
                    <input class="form-control" type="file" id="formFile" name="logotipo">
                </div>

                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" name="senha" style="background-color: #24282d" required>
                </div>

                <div class="mb-3">
                    <label for="confirmar_senha" class="form-label">Confirme a Senha</label>
                    <input type="password" class="form-control" name="confirma_senha" style="background-color: #24282d" required>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary w-50 botaoCadastroAcesso">Cadastrar</button>
                </div>
            </form>

            <div class="text-center animacaoPadrao">
                <p>
                    Já tem uma conta? <a style="font-weight: bold" class="link-light link-offset-3-hover link-underline
                                        link-underline-opacity-0 link-underline-opacity-75-hover" href="acesso.php">Entrar
                    </a>
                </p>
            </div>

        </div>
    </div>

    <script>
        function cadastrar_lojista(e) {
            e.preventDefault();

            var dados = new FormData(e.target);

            Swal.fire({
                title: 'Processando...',
                text: 'Aguarde um momento.',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            fetch('ajax/cadastrar_lojista.php', {
                method: 'POST',
                body: dados
            })
                .then(response => response.json())
                .then(data => {
                    Swal.close();

                    if (data.status == 'sucesso') {
                        Swal.fire({
                            title: 'Sucesso!',
                            text: data.msg,
                            icon: 'success',
                            confirmButtonText: 'Ir para Acesso'
                        }).then((result) => {
                            if (result.isConfirmed || result.isDismissed) {
                                window.location.href = 'acesso.php';
                            }
                        });
                    } else {
                        Swal.fire({
                            title: 'Ops!',
                            text: data.msg,
                            icon: 'error',
                            confirmButtonText: 'Ok'
                        });
                    }
                })
                .catch(error => {
                    Swal.fire('Erro!', 'Houve uma falha na comunicação com o servidor.', 'error');
                    console.log(error);
                });
        }
    </script>

</body>
</html>