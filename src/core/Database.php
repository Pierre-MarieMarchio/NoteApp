<?php

namespace Core;

use PDO;
use PDOException;

class Database
{
    private static $instance = null;
    private $connection;
    private $statement;

    private function __construct($config)
    {

        $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['db']};charset={$config['charset']}";

        // Options pour la connexion PDO

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        // PDO

        $this->connection = $this->connection($dsn, $config['user'], $config['pass'], $options);;
    }

    public static function getInstance($config)
    {
        if (self::$instance === null) {
            self::$instance = new self($config);
        }
        return self::$instance;
    }


    public function query($query, $params = [])
    {

        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);
        return $this;
    }


    private function fetch()
    {
        return $this->statement->fetch();
    }

    public function fetchOrFail()
    {
        $result = $this->fetch();

        if (!$result) {
            abort();
        };

        return $result;
    }

    private function fetchAll()
    {
        return $this->statement->fetchAll();
    }

    public function fetchAllOrFail()
    {
        $result = $this->fetchAll();

        if (!$result) {
            abort();
        };

        return $result;
    }

    private function connection($dsn, $user, $pass, $options)
    {

        try {
            $pdo = new PDO($dsn, $user, $pass, $options);
            console_log("Connexion bdd réussie !");
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }
        return $pdo;
    }
}
