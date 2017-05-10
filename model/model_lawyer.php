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
    public static function getBySubDomain($subDomain)
    {

        $bd = new PDO('mysql:host=localhost;dbname=HelpMe_Avocat;charset=utf8', 'root', '');

        $req = $bd->prepare('SELECT L.name, L. FROM LAWYERS L, SUBDOMAIN S WHERE S.label = ? AND L.idSubDomain = S.id');

        $req -> execute(array($subDomain));

        return $req;

    }


    /**
     * @param $subDomain
     * @return mixed
     */
    public static function countBySubDomain($subDomain)
    {

        $bd = new PDO('mysql:host=localhost;dbname=HelpMe_Avocat;charset=utf8', 'root', '');

        $req = $bd->prepare('SELECT COUNT(*) FROM LAWYERS  WHERE email = ? ');

        $req -> execute(array($subDomain));

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