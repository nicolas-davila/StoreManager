<?php
// StoreManager/controllers/CadastroController.php

// Verifica se é uma requisição GET para mostrar o formulário
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    require_once 'views/cadastro.php';
}
// ... (Aqui entraria a lógica POST para salvar no Model) ...
?>