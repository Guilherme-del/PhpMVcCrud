<?php
namespace_Traits;

#cria um array com a url digitada pelo usuario
trait traitparseUrl{
    public static function parseurl($par=null){
        $url = explode("/",rtrim($_GET['url'],FiLTER_SANITIZE_URL));
        return $url;
    }
}