<?php
require "app/controller/homeController.php";
require_once "lib/conexao/database/connection.php";
require_once "app/model/user.php";

$pagina = explode( '/', $_SERVER['REQUEST_URI']);
$ctrl = new homeController();

switch($pagina[1]){
  case "index":
  $ctrl->index();
  break;
    
  case "check":
  $ctrl->check();
  break; 

  default:
  $ctrl->index();
  break;
}