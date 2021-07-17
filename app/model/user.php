<?php
use conexao\database\Connection;

class User 
    {   
    private $id;
    private $nome;
    private $email;
    private $senha;    
// 'C'RUD  CREATE ------------------------------------------------------------------<
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
// C'R'UD READ ------------------------------------------------------------------<
    public function validateLogin(){
        $conn = Connection::getConn();             
        $sql = 'SELECT * FROM usuarios WHERE email = :email AND senha = :senha' ; // :email impede invasões do tipo sqlinjection (um pouco de segurança a mais para o site)
                   
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':senha', $this->senha);
        $stmt->execute();

        if ($stmt->rowCount())
        {         
            $result = $stmt->fetch(); 

            if ($result['senha'] === $this->senha) {
                $_SESSION['usr'] = array(
                    'id_user'   => $result['id'],
                    'name_user' => $result['name']
                );           
                return $result;
        }  
        }            
    else {
        throw new \Exception('Login inválido');}
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
// CR'U'D Update ----------------------------------------------------------------<
    public function alterauser(){
        $conn = Connection::getConn();             
        
         // ':' impede invasões do tipo sqlinjection (um pouco de segurança a mais para o site)
        
        if (($this->nome <> '' )&& ($this->senha <> '') ) {
        $sql = 'UPDATE usuarios SET nome = :nome, senha =:senha WHERE id = :id';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $this -> id);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':senha', $this->senha); 
        }
        elseif (($this->senha === '' )) {
            $sql = 'UPDATE usuarios SET nome = :nome WHERE id = :id';
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $this -> id);
            $stmt->bindParam(':nome', $this->nome);  
        }
        elseif (($this->nome === '' )){
            $sql = 'UPDATE usuarios SET senha = :senha WHERE id = :id';
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $this -> id);
            $stmt->bindParam(':senha', $this->senha);
        }
        elseif(($this->nome <> '' )&& ($this->senha <> '')) {
            $stmt->bindParam(':id', $this -> id);
        }
        $stmt->execute();        
        if($stmt->rowCount()>0){
        return true; 
        }
        else{
        throw new \Exception('Impossivel alterar cliente recentemente cadastrado');   
        }
    }
// CRU'D' DELETE ------------------------------------------------------------------<
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

// funções que determinam o valor de uma variavel -------------------------------<
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
// Vou melhorar esses get's aparentam ser muito desnecessarios e repetitivos -------<
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
    public function getIdAlterado (){  
        return $this -> id;
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
    public function getNomeAlterado (){
        $conn = Connection::getConn();
        $sql = 'SELECT * FROM usuarios WHERE id = :id';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id', $this->id);
        $stmt->execute();

        if ($stmt->rowCount()){
        $result = $stmt->fetch();  
        }
        $nome = $result['nome'];

        return $nome;
    }
    public function getEmail(){
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
    public function getEmailAlterado (){
        $conn = Connection::getConn();
        $sql = 'SELECT * FROM usuarios WHERE id = :id';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id', $this->id);
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
    public function getSenhaAlterada (){
        $conn = Connection::getConn();
        $sql = 'SELECT * FROM usuarios WHERE id = :id';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id', $this->id);
        $stmt->execute();

        if ($stmt->rowCount()){
        $result = $stmt->fetch();  
        }
        $senha = $result['senha'];

        return $senha;
    }
// Frescura.php -------------------------------------------------------------------<
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