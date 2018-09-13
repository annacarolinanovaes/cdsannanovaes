<?php

class Banco
{
	//Definições para o banco de dados
    private static $dbNome = 'cdannanovaes';
    private static $dbHost = 'localhost:3306';
    private static $dbUsuario = 'root';
    private static $dbSenha = '';
    
    private static $cont = null;
    
    public function __construct() 
    {
        die('A função Init nao é permitida!');
    }
    
	//Conexão com o banco de dados
    public static function conectar()
    {
        if(null == self::$cont)
        {
            try
            {
                self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbNome, self::$dbUsuario, self::$dbSenha); 
            }
            catch(PDOException $exception)
            {
                die($exception->getMessage());
            }
        }
        return self::$cont;
    }
    
	//Desconexão com o banco de dados
    public static function desconectar()
    {
        self::$cont = null;
    }
}

?>
