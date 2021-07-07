<?php

use conexao\database\Connection;

class User 
    {
    private $id;
    public $nome;
    private $email;
    private $senha;
    
    public function validateLogin(){
        $conn = Connection::getConn();
             
        $sql = 'SELECT * FROM usuarios WHERE email = :email'; // :email impede invasões do tipo sqlinjection (um pouco de segurança a mais para o site)
                   
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':email', $this->email);

        $stmt->execute();
        
        if ($stmt->rowCount())
        {             
            $result = $stmt->fetch();
          
            if ($result['senha'] === $this->senha) {
                $_SESSION['usr'] = array(                   
                    'id_user'   => $result['id'],
                    'name_user' => $result['nome']
                );               
                return true;
            }
        }     
        throw new \Exception('Login inválido');
    }

    public function criauser(){
        $conn = Connection::getConn();
             
        $sql = 'INSERT INTO usuarios (nome,email,senha) values (:nome,:email,:senha)';
         // ':' impede invasões do tipo sqlinjection (um pouco de segurança a mais para o site)
                
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nome', $this->nome);  
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':senha', $this->senha);

        $stmt->execute(); 
        
        if($stmt->rowCount()>0){
            return true;
        }else{
            echo "Não Cadastrou";
        }
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