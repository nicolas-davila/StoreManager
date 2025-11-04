<?php
// StoreManager/controllers/AcessoController.php

// Verifica se é uma requisição GET para mostrar o formulário
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    require_once 'views/acesso.php';
}
// ... (Aqui entraria a lógica POST para salvar no Model) ...
?>