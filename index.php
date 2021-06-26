<?php
header("Content-Type:text/html; charset=utf-8");
include("config/config.php");
include(DIRREQ."lib/vendor/autoload.php");

use traits\traitparseUrl;

class ClassTeste {
    use traitparseurl;
public function __construct() 
    {
     var_dump($this->parseurl());
    }
}

$teste = new ClassTeste();


