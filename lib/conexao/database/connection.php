<?php

    // usar namespace é importante caso for trabalhar com mais de uma classe de Conexão
    namespace conexao\database;
    // Lembrete: classes abstratas não podem ser instanciadas
    abstract class Connection
    {
        // atritubo estático que armazena a conexão
        private static $conn;
        // função que será chamada por todas as classes que queiram utilizar uma instância do PDO
        public static function getConn()
        {                                
            // utiliza self:: ao invés de this-> porque é um atributo estático
            try{
            if(!self::$conn) {     
                self::$conn = new \PDO("mysql: host=localhost:3306; dbname=login", 'root','admin');
            }       
            return self:: $conn;
        }
        catch (Exception $e){
            echo 'Não foi possivel se conectar ao banco de dados';
        }
        }
    }

?>