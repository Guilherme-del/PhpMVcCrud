<?php
#caminhos absolutos
$pastainterna = "";
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$pastainterna}"); //caso o servidor não esteja na raiz

if (substr($_SERVER['DOCUMENT_ROOT'],-1)=='/') {
   $barra= "";
}
else{
    $barra = "/";
}
define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']} {$barra}{$pastainterna}");

#Atalhos
define('DIRIMG',DIRPAGE.'img/');
define('DIRCSS',DIRPAGE.'lib/css/');
define('DIRJS',DIRPAGE.'lib/js/');

#Definindo Acesso ao Db
define('HOST',"localhost");
define('DB',"sistema");
define('USER',"ROOT");
define('PASS',"");