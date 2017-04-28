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



}