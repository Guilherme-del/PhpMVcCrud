<?php

require "app/model/user.php";

class homeController{
  public function index(){
    include "app/view/index.php";}
 
  public function check (){
    try{
    $user = new User;
    $user -> setEmail($_POST['email']);
    $user -> setSenha($_POST['senha']);
    $user -> validateLogin();
    $nome = $user -> getNome();  
    $email = $user -> getEmail();
    $senha = $user -> getSenha();
    $id = $user -> getId(); 
    $saudandoamandioca = $user -> saudacoes();

    include "app/view/dashboard.php";        
  }        
    catch(Exception $e){
      $e = 'Login inválido, cadastre-se';
      include "app/view/index.php";
    }
 }
 
 public function cadastro () {
  try{
    $user = new User;
    $user -> setNome($_POST['nome_cad']);
    $user -> setEmail($_POST['email_cad']);
    $user -> setSenha($_POST['senha_cad']);
    $user -> validateuser();
    $user -> criauser();
    $saudandoamandioca = $user -> saudacoes();
    $nome = $user -> getNome();
    $email = $user -> getEmail();
    $senha = $user -> getSenha();
    $senha = $user -> getId();      
    include "app/view/dashboard.php"; 
  }
  catch(Exception $e){
    $e = 'email já consta em nossa base de cadastro';
    include "app/view/index.php";
  }
 }

 public function alteracao () {
  try{  
  $user = new User; 
  $user -> setId($_POST['Dashid2']); 
  $user -> setNome($_POST['dashnome']);
  $user -> setSenha($_POST['dashsenha']);
  $user -> alterauser();

  $saudandoamandioca = $user -> saudacoes();
  $email = $user -> getEmailAlterado();
  $nome = $user -> getNomeAlterado();
  $senha = $user -> getSenhaAlterada();
  $id = $user -> getIdAlterado();  

  include "app/view/dashboard.php";
  echo  "<script>alert('Dados alterados');</script>";
}
  catch (Exception $e){
    $e = 'Impossível alterar dados de conta recentemente criada, Logue com a conta e a possibilidade se habilitará';
    include "app/view/index.php"; 
  } 
 }

 public function exclui () {
  try{  
  $user = new User;
  $user -> setId($_POST['Dashid']);
  $user -> excluiuser();

  include "app/view/index.php";
  echo  "<script>alert('Espero te ver novamente!');</script>";

}
  catch (Exception $e){
    $e = 'Impossível excluir conta recentemente criada, Logue com a conta e a possibilidade se habilitará';
    include "app/view/index.php"; 
  } 
 }
}