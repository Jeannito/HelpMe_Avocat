<?php

/**
 * Created by PhpStorm.
 * User: jeanb2r
 * Date: 26/04/2017
 * Time: 16:45
 */
class ModelLawyer
{
    /**
     * @param $subDomain it's the sub domain to find the
     */
    public static function getBySubDomain($idSubDomain)
    {

        $bd = new PDO('mysql:host=localhost;dbname=HelpMe_Avocat;charset=utf8', 'root', '');

        $req = $bd->prepare('SELECT * FROM lawyers WHERE idSubDomain = ? ');

        $req -> execute(array($idSubDomain));

        return $req;

    }


    /**
     * @param $subDomain
     * @return mixed
     */
    public static function countBySubDomain($idSubDomain)
    {

        $bd = new PDO('mysql:host=localhost;dbname=HelpMe_Avocat;charset=utf8', 'root', '');

        $req = $bd->prepare('SELECT COUNT(*) FROM lawyers  WHERE idSubDomain = ? ');

        $req -> execute(array($idSubDomain));

        $resultat = $req->fetch();

        return $resultat[0];

    }


    /**
     * @param $id
     * @return mixed
     */
    public static function getInformationById($id)
    {

        $bd = new PDO('mysql:host=localhost;dbname=HelpMe_Avocat;charset=utf8', 'root', '');

        $req = $bd->prepare('SELECT * from LAWYERS WHERE id = ?');

        $req->execute(array($id));

        return $req->fetch();
    }

}