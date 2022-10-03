<?php

namespace App\Model;
use App\DAO\LoginDAO;

class LoginModel extends Model
{
    public $id, $nome, $senha, $email;

    public function autenticar()
    {
        $dao = new LoginDAO();

        $dao_usuario_logado = $dao->selectByEmailAndSenha($this->$email, $this->$senha);

        if(is_object($dados_usuario_logado))
         return $dados_usuario_logado;
    else
        null;
    }
}
