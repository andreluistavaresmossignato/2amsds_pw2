<?php
    require_once "config.php";
    echo "Arquivo exemplo002.php\n";
    echo "Olá " . $_SESSION['usuario'] . "\n";
    echo "Apresentando o ID da sessão: " . session_id() . "\n";