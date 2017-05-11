<?php

/**
 * Created by PhpStorm.
 * User: jeanb2r
 * Date: 26/04/2017
 * Time: 16:45
 */
class ModelSubDomain
{

    public function getSubDomain()
    {

        $bd = new PDO('mysql:host=localhost;dbname=HelpMe_Avocat;charset=utf8', 'root', '');

        $req = $bd->prepare('SELECT * FROM subdomain');

        $req -> execute();

        return $req;

    }

    public function countSubDomain()
    {

        $bd = new PDO('mysql:host=localhost;dbname=HelpMe_Avocat;charset=utf8', 'root', '');

        $req = $bd->prepare('SELECT COUNT(*) FROM subdomain');

        $req -> execute();

        $resultat = $req->fetch();

        return $resultat[0];
    }


    public function getInformationById($id)
    {

        $bd = new PDO('mysql:host=localhost;dbname=HelpMe_Avocat;charset=utf8', 'root', '');

        $req = $bd->prepare('SELECT * from subDomain WHERE id = ?');

        $req->execute(array($id));

        return $req->fetch();
    }

}