<?php

require "app/model/user.php";


class homeController{
  public function index(){
    include "app/view/index.php";}
 

  public function check (){
    try{
    $user = new User;
    $user -> setEmail ($_POST['email']);
    $user -> setSenha($_POST['senha']);
    $user -> validateLogin();  
    
  }   
     
    catch(Exception $e){
      include "app/view/index.php";    
    }
}
}