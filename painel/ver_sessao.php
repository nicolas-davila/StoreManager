<?php

    session_start();
    if (!isset($_SESSION['id_usuario'])) {
        header("Location: ../acesso.php?erro=sem_permissao");
        exit;
    }
?>