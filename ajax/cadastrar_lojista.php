<?php
    header('Content-Type: application/json');
    require_once '../config/db.php';

    $nome = $_POST['nome'];
    $nome_empresa = $_POST['nome_empresa'];
    $logo = $_FILES['logotipo'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirma_senha = $_POST['confirma_senha'];
    $nivel = 'cliente';

    if ($senha != $confirma_senha) {
        echo json_encode(['status' => 'erro', 'msg' => 'As senhas não são idênticas.']);
        exit;
    }

    $sql_verifica_email = "SELECT id FROM usuarios WHERE email= '$email'";
    $resultado = mysqli_query($conn, $sql_verifica_email);

    if (mysqli_num_rows($resultado) > 0) {
        echo json_encode(['status' => 'erro', 'msg' => 'Email já cadastrado!']);
        exit;
    }

    $logo = null;

    if(isset($_FILES['logotipo']) && $_FILES['logotipo']['error'] === 0) {
        $diretorio = '../assets/uploads/';
        $extensao = pathinfo($_FILES['logotipo']['name'], PATHINFO_EXTENSION);

        $novo_nome = "logo_" . uniqid() . "." . $extensao;

        if(move_uploaded_file($_FILES['logotipo']['tmp_name'], $diretorio . $novo_nome)) {
            $logo = '../assets/uploads/' . $novo_nome;
        }
    }

    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    $sql_cadastro = "INSERT INTO usuarios (nome, nome_empresa, logo, email, senha, nivel_acesso) 
            VALUES ('$nome', '$nome_empresa', '$logo', '$email', '$senha_hash', '$nivel')";
    $resultado_cadastro = mysqli_query($conn, $sql_cadastro);

    if (!$resultado_cadastro) {
        echo json_encode(['status' => 'erro', 'msg' => 'Erro ao realizar cadastro.']);
    } else {
        echo json_encode(['status' => 'sucesso', 'msg' => 'Conta criada com sucesso!']);
    }


?>