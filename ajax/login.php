<?php
    session_start();
    header('Content-Type: application/json');
    require_once '../config/db.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if (empty($email) || empty($senha)) {
        echo json_encode(['status' => 'erro', 'msg' => 'Preencha email e senha!']);
        exit;
    }

    $sql = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultado)) {
        if (password_verify($senha, $row['senha'])) {
            $_SESSION['id_usuario'] = $row['id'];
            $_SESSION['nome'] = $row['nome'];
            $_SESSION['nome_empresa'] = $row['nome_empresa'];
            $_SESSION['logo'] = $row['logo'];
            $_SESSION['nivel'] = $row['nivel_acesso'];

            echo json_encode(['status' => 'sucesso', 'msg' => 'Bem vindo de volta!']);
        } else {
            echo json_encode(['status' => 'erro', 'msg' => 'Email ou senha incorretos.']);
        }
    } else {
        echo json_encode(['status' => 'erro', 'msg' => 'Email não cadastrado.']);
    }

    mysqli_close($conn);
?>