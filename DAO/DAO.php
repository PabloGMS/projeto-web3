<?php

namespace App\DAO;
use \PDO;
abstract class DAO

{
    protected $conexao;
    public function _construct()
    {
        $dns = "mysql:host=" . $_ENV['db']['host'] . ";dbname=" $_ENV[data]
    }
}