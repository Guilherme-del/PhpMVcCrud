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

    
    include "app/view/dashboard.php";    
  }        
    catch(Exception $e){
      $e = 'Login inválido, Cadastre-se';
      include "app/view/index.php";
    }
 }
 
 public function cadastro () {
  try{
    $user = new User;
    $user -> setNome($_POST['nome_cad']);
    $user -> setEmail($_POST['email_cad']);
    $user -> setSenha($_POST['senha_cad']);
    $user -> criauser();

    include "app/view/dashboard.php"; 
  }
  catch(Exception $e){
    var_dump($e);
    die();
  }
 }
}