<?php

    // 1. Obter a URL requisitada
    // Remove a parte do diretório do projeto para isolar apenas a rota.
    // ATENÇÃO: Você pode precisar ajustar a parte de 'trim' dependendo de como o WAMP/servidor está configurado.
    $uri = trim($_SERVER['REQUEST_URI'], '/');

    // 2. Definir o Controlador e a Ação padrão
    $controllerName = 'Home'; // Controlador padrão (ex: IndexController ou HomeController)
    $actionName = 'index';    // Método padrão

    // 3. Analisar a URI para determinar o Controller/Action
    $segments = explode('/', $uri);

    // Verifica se há um segmento na URI (ex: /cadastro)
    if (!empty($segments[0])) {
        // A primeira parte da URL (após a base) é o nome do Controller
        $controllerName = ucfirst(strtolower($segments[0]));
    }

    // 4. Mapeamento e Despacho (Dispatch)

    // Nome do arquivo do Controller esperado
    $controllerFile = 'controllers/' . $controllerName . 'Controller.php';

    if (file_exists($controllerFile)) {
        // Inclui e executa o Controller correspondente
        require_once $controllerFile;

        // *** AQUI ESTÁ O PONTO CHAVE: PARE A EXECUÇÃO APÓS INCLUIR O CONTROLLER! ***
        exit(); // ou die();

    } else {
        // Rota não encontrada (404)
        header("HTTP/1.0 404 Not Found");
        echo "<h1>Erro 404: Página não encontrada</h1>";
        exit(); // *** PARE A EXECUÇÃO TAMBÉM NO ERRO! ***
    }

    // Qualquer código HTML que estivesse aqui não será mais alcançado.
?>


