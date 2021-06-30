<?php
require "app/controller/homeController.php";
require_once "lib/conexao/database";

$pagina = explode( '/', $_SERVER['REQUEST_URI']);
$ctrl = new homeController();

switch($pagina[1]){
  case "index":
  $ctrl->index();
  break;
    
  case "login":
  $ctrl->login();
  break;  

  default:
  $ctrl->index();
  break;
}