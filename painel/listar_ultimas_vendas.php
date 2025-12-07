<?php

    include '../config/db.php';

    if ($conn) {
        echo 'Conectado no banco';
    } else {
        echo 'Não conectado';
    }




?>