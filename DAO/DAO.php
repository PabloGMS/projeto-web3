<?php

namespace App\DAO;
use \PDO;
abstract class DAO

{
    protected $conexao;
    public function _construct()
    {
        $dsn = "mysql:host=" . $_ENV['db']['host'] . ";dbname=" $_ENV['db']['database'];

        $this->conexao = new PDO($dns, $_ENV['db']['user'], $_ENV['db']['pass']);
    }
}