<?php
require "app/model/user.php";

class Dashboard{

    public function cadastro(){
    $model = new User();
    $dados = $model->listarDados();
   

    }
}
?>