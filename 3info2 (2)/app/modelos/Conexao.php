<?php
/**
 * Created by PhpStorm.
 * User: JEFFERSON
 * Date: 09/11/2017
 * Time: 10:40
 */

class Conexao {

    const HOST      = "localhost";
    const NOMEBANCO = "3info2";
    const USUARIO   = "root";
    const SENHA     = "root";

    public static function getConexao(){
        $conexao = new PDO("mysql:host=".self::HOST.";dbname=".self::NOMEBANCO, self::USUARIO, self::SENHA);

        return $conexao;
    }
}

//teste conexao
//$con = new Conexao();
//$con->getConexao();
//PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'