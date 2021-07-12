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
                            
            if ($result['password'] === $this->password) {
                $_SESSION['usuarioID'] = $result['id']; 
                $_SESSION['usuarioNome'] = $result['nome'];
                $_SESSION['usuarioMail'] = $result['email'];
                $_SESSION['usuarioSenha'] = $result['senha'];               
                return $result;
        }       
        throw new \Exception('Login inválido');
    }
}
    public function validateuser(){
        $conn = Connection::getConn();
        $sql = 'SELECT * FROM usuarios WHERE email = :email'; // :email impede invasões do tipo sqlinjection (um pouco de segurança a mais para o site)
                   
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':email', $this->email);

        $stmt->execute();      

        if ($stmt->rowCount())
        {                        
            $result = $stmt->fetch();

            if ($this->email === null) {
                return true;               
            }
            else{
                throw new \Exception('Login usuario já consta em nossa base de dados');
            }
        }            
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

    public function excluiuser(){
        $conn = Connection::getConn();             
        $sql = 'DELETE FROM  usuarios WHERE id = :id';
         // ':' impede invasões do tipo sqlinjection (um pouco de segurança a mais para o site)
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $this -> id);


        $stmt->execute(); 
        
        if($stmt->rowCount()>0){
            return true;
        }else{
        throw new \Exception('Impossivel excluir cliente recentemente cadastrado');   
        }
    }

    public function setId ($id){
        $this -> id = $id;
    }

    public function setEmail ($email){
        $this -> email = $email;  
    }

    public function setSenha ($senha){
        $this -> senha = $senha;
    }

    public function setNome ($nome){
        $this -> nome = $nome;
    }

    // Vou melhorar esses get's aparentam ser muito desnecessarios e repetitivos ----<
    public function getId (){
        $conn = Connection::getConn();
        $sql = 'SELECT * FROM usuarios WHERE email = :email';
        $stmt = $conn->prepare($sql);

        $stmt->bindValue(':email',$this->email );

        $stmt->execute();

        if ($stmt->rowCount()){
        $result = $stmt->fetch();  
        }
        $id = $result['id'];
        
        return $id;
    }
    public function getNome (){
        $conn = Connection::getConn();
        $sql = 'SELECT * FROM usuarios WHERE email = :email';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':email', $this->email);
        $stmt->execute();

        if ($stmt->rowCount()){
        $result = $stmt->fetch();  
        }
        $nome = $result['nome'];

        return $nome;
    }
    public function getEmail (){
        $conn = Connection::getConn();
        $sql = 'SELECT * FROM usuarios WHERE email = :email';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':email', $this->email);
        $stmt->execute();

        if ($stmt->rowCount()){
        $result = $stmt->fetch();  
        }
        $email = $result['email'];

        return $email;
    }
    public function getSenha (){
        $conn = Connection::getConn();
        $sql = 'SELECT * FROM usuarios WHERE email = :email';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':email', $this->email);
        $stmt->execute();

        if ($stmt->rowCount()){
        $result = $stmt->fetch();  
        }
        $senha = $result['senha'];

        return $senha;
    }
// -----------------------------------------------------------------------------<
    public function saudacoes (){
    	date_default_timezone_set('America/Sao_Paulo');
	$hora = date('H');
	if( $hora >= 6 && $hora <= 12 )
		return 'Bom dia, ';
	else if ( $hora > 12 && $hora <=18  )
		return 'Boa tarde, '; 
	else
		return 'Boa noite, ';
    }  
}
?>