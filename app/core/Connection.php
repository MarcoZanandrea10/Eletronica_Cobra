<?php

class Connection
{
    private static ?PDO $pdo = null;

    public static function getConnection(): PDO
    {
        if (self::$pdo !== null) {
            return self::$pdo;
        }

        $configPath = __DIR__ . '/../config/database.php';

        if (!file_exists($configPath)) {
            error_log('Arquivo database.php não encontrado.');
            throw new Exception('Erro interno do sistema.');
        }

        $config = require $configPath;

        $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};charset={$config['charset']}";

        try {
            self::$pdo = new PDO(
                $dsn,
                $config['username'],
                $config['password'],
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false
                ]
            );

            return self::$pdo;
        } catch (PDOException $e) {
            error_log('Erro PDO: ' . $e->getMessage());
            throw new Exception('Erro ao conectar com o banco.');
        }
    }
}