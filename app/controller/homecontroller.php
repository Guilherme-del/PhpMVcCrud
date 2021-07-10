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
    $nome = $user -> getNome();
    $user -> validateLogin();
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
  $id = $user -> getId();
  $user -> excluiuser();

  include "app/view/index.php";
}
  catch (Exception $e){
    
    $e->getMessage();
    var_dump($e);
    die();
  } 
 }
}