<?php

/**
 * Created by PhpStorm.
 * User: jeanb2r
 * Date: 26/04/2017
 * Time: 16:44
 */
class ModelRequest
{

   public static function RegisterRequest($tab){

    $bd = new PDO('mysql:host=localhost;dbname=HelpMe_Avocat;charset=utf8', 'root', '');

    $req = $bd->prepare('INSERT INTO request(gender, experience, position, personality, subDomain, idUser) VALUES( :gender, :experience, :position, :personality, :subDomain, :idUser)');

    $req->execute($tab);
    
    }

    public static function GetAllRequest(){

    $bd = new PDO('mysql:host=localhost;dbname=HelpMe_Avocat;charset=utf8', 'root', '');

    $req = $bd->query('SELECT * FROM request');

    return $req -> fetchAll(PDO::FETCH_OBJ);

        
    }

    public static function GetRequest($id){

    $bd = new PDO('mysql:host=localhost;dbname=HelpMe_Avocat;charset=utf8', 'root', '');

    $req = $bd->prepare('SELECT * FROM request WHERE id = ? ');

    $req->execute(array($id));

    $res = $req -> fetch();

    return $res;

    }

    public static function TreatRequest($id){

    $bd = new PDO('mysql:host=localhost;dbname=HelpMe_Avocat;charset=utf8', 'root', '');

    $req = $bd->prepare('UPDATE request SET isTreated = 1 WHERE id = ? ');

    $req->execute(array($id));

    }
}