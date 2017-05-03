<?php

/**
 * Created by PhpStorm.
 * User: jeanb2r
 * Date: 26/04/2017
 * Time: 16:44
 */
class ModelUser
{
	public static function RegisterUser($tab){

    $bd = new PDO('mysql:host=localhost;dbname=HelpMe_Avocat;charset=utf8', 'root', '');

    $req = $bd->prepare('INSERT INTO users(firstname, lastname) VALUES(:firstname, :lastname)');

    $req->execute($tab);
    
    }

    public static function getInformation($tab)
    {

        $bd = new PDO('mysql:host=localhost;dbname=HelpMe_Avocat;charset=utf8', 'root', '');

        $req = $bd->prepare('SELECT * from users WHERE lastname = :lastname AND firstname = :firstname');

        $req->execute($tab);

        return $req->fetch();
    }

    public static function GetUser($id){

    $bd = new PDO('mysql:host=localhost;dbname=HelpMe_Avocat;charset=utf8', 'root', '');

    $req = $bd->prepare('SELECT * FROM users WHERE id = ? ');

    $req->execute(array($id));

    $res = $req -> fetch();

    return $res;

    }

    public static function GetAllMembers(){

    $bd = new PDO('mysql:host=localhost;dbname=HelpMe_Avocat;charset=utf8', 'root', '');

    $req = $bd->query('SELECT * FROM users');

    return $req -> fetchAll(PDO::FETCH_OBJ);

        
    }

}