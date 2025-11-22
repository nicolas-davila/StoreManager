<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = 'storemanager_db';

$conn = mysqli_connect($host, $user, $pass, $db);

$nome = "Admin";
$email = "admin@storemanager.com";
$senha = "2025@admin@2025@storemanager";
$empresa = "Store Manager";

$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nome, nome_empresa, email, senha, nivel_acesso) VALUES ('$nome', '$empresa', '$email', '$senha_hash', 'admin')";


if (!mysqli_query($conn, $sql)) {
    echo "Erro ao salvar no banco" . mysqli_error($conn);
} else {
    echo "Salvo no banco com sucesso!";
}

?>