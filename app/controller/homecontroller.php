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

 public function exclui () {
  try{  
  $user = new User;
  $user -> setId($_POST['Dashid']);
  $user -> excluiuser();

  include "app/view/index.php";
  echo  "<script>alert('Usuário excluido');</script>";

}
  catch (Exception $e){
    
    $e = 'Conta recentemente criada , saia e logue novamente';
    include "app/view/dashboard.php"; 
  } 
 }
}