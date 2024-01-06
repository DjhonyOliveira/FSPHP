<?php

namespace Source\Database;

use \PDO;
use \PDOException;

class Connect
{
    private const HOST = "localhost";
    private const USER = "postgres";
    private const DBNAME = "FSPHP";
    private const PASSWD = "postgre";
    private const PORT = "5432";

    private const OPTIONS = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ];

    private static $instance;

    /**
     * @return PDO
     */
    public static function getInstance(): PDO
    {
        if (empty(self::$instance)) {
            try {
                self::$instance = new PDO(
                    "pgsql:host=" . self::HOST . ";port=" . self::PORT . ";dbname=" . self::DBNAME,
                    self::USER,
                    self::PASSWD,
//                    self::OPTIONS
                );
            } catch (PDOException $exception) {
                die("<h1>Whoops! Erro ao conectar...</h1>");
            }
        }

        return self::$instance;
    }

    final private function __construct()
    {
    }

    private function __clone()
    {
    }
}