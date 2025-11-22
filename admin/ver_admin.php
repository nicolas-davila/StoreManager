<?php

session_start();
if (!isset($_SESSION['is_usuario'])) {
    header("Location: ../acesso.php?erro=sem_permissao");
    exit;
}

if ($_SESSION['nivel'] != 'admin') {
    header("Location: ../painel/index.php");
    exit;
}

?>