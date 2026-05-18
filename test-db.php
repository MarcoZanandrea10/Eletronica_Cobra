<?php

require_once __DIR__ . '/app/core/Connection.php';

try {
    $pdo = Connection::getConnection();

    echo 'Conexão com o banco realizada com sucesso.';
} catch (Exception $e) {
    echo 'Erro interno. Não foi possível conectar ao banco.';
}