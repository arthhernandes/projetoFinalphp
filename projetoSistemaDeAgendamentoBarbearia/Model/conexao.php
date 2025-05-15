<?php

    // ajustar nome do banco de dados e usuario
    // e senha de acordo com o seu ambiente
    try
    {
        $pdo = new PDO('mysql:host=localhost;dbname=teste', 'root', 'fukuda');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $erro)
    {
        echo "ERRO => " . $erro->getMessage();
    }
?>