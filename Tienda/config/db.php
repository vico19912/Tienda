<?php
class Database{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db = 'tienda';

    public static function connect(){
        $bd = new mysqli(self::$host,self::$user,self::$pass,self::$db);
        $bd->query("SET NAMES 'utf8'");
        return $bd;
    }
}