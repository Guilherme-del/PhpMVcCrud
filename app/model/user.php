<?php

class User 
    {
    private $id;
    private $nome;
    private $email;
    private $senha;


    public function validateLogin(){
        //Conecta ao banco
        //selecionar o user que tenha o mesmo email do informado
        //conferir a senha do usuario se estiver ok criar a session e direcionar para a tela dashboard se tiver algum erro redirecionar de volta para a tela inicial
    }

    public function setEmail ($email){
        $this -> email = $email;
    }

    public function setNome ($nome){
        $this -> nome = $nome;
    }

    public function setSenha ($senha){
        $this -> senha = $senha;
    }

    public function getNome (){
        return $this -> nome;
    }

    public function getEmail (){
        return $this -> email;
    }

    public function getSenha (){
        return $this -> senha;
    }

}
?>