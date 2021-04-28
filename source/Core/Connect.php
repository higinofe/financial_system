<?php

namespace source\Core;

class Connect
{
    private const OPTIONS = [
        \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
        \PDO::ATTR_CASE => \PDO::CASE_NATURAL
    ];
    
    private static $instance;

    public static function getInstance(): ?\PDO
    {
        if (empty(self::$instance)) {
            try {
                self::$instance = new \PDO(
                    "mysql:host=" . CONFIG_HOST . ";dbname=" . CONFIG_NAME,
                    CONFIG_USER,
                    CONFIG_PASSW,
                    self::OPTIONS
                );
            } catch (\PDOException $exception) {
                //redirect("/ops/problemas");
            }
        }

        return self::$instance;
    }

    final private function __construct()
    {
    }

    final private function __clone()
    {
    }


}