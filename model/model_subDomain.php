<?php

/**
 * Created by PhpStorm.
 * User: jeanb2r
 * Date: 26/04/2017
 * Time: 16:45
 */
class ModelSubDomain
{

    public static function GetSubDomain()
    {

        $bd = new PDO('mysql:host=localhost;dbname=HelpMe_Avocat;charset=utf8', 'root', '');

        $req = $bd->prepare('SELECT * FROM subdomain');

        $req -> execute();

        return $req;

    }

    public static function countSubDomain()
    {

        $bd = new PDO('mysql:host=localhost;dbname=HelpMe_Avocat;charset=utf8', 'root', '');

        $req = $bd->prepare('SELECT COUNT(*) FROM subdomain');

        $req -> execute();

        $resultat = $req->fetch();

        return $resultat[0];
    }


    public static function GetInformationById($id)
    {

        $bd = new PDO('mysql:host=localhost;dbname=HelpMe_Avocat;charset=utf8', 'root', '');

        $req = $bd->prepare('SELECT * from subDomain WHERE id = ?');

        $req->execute(array($id));

        return $req->fetch();
    }

    public static function GetSubDomainByLabel($label){

    $bd = new PDO('mysql:host=localhost;dbname=HelpMe_Avocat;charset=utf8', 'root', '');

    $req = $bd->prepare('SELECT * FROM subdomain WHERE label = ? ');

    $req->execute(array($label));

    $res = $req -> fetch();

    return $res;

    }
}