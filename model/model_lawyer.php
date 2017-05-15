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

   public static function RegisterTheChoosenLawyer($tab){

        $bd = new PDO('mysql:host=localhost;dbname=HelpMe_Avocat;charset=utf8', 'root', '');

        $req = $bd->prepare('INSERT INTO possible_lawyers(idRequest, idLawyer, formCompatibility, helpmeCompatibility, finalCompatibility) VALUES( :idRequest, :idLawyer, :formCompatibility, :helpmeCompatibility, :finalCompatibility)');

        $req->execute($tab);
    
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
    public static function GetInformationById($id)
    {

        $bd = new PDO('mysql:host=localhost;dbname=HelpMe_Avocat;charset=utf8', 'root', '');

        $req = $bd->prepare('SELECT * from LAWYERS WHERE id = ?');

        $req->execute(array($id));

        return $req->fetch();
    }

    /**
     * @param $id
     * @return mixed
     */
    public static function getLawyerByRequest($idRequest)
    {

        $bd = new PDO('mysql:host=localhost;dbname=HelpMe_Avocat;charset=utf8', 'root', '');

        $req = $bd->prepare('SELECT * from POSSIBLE_LAWYERS WHERE idRequest = ?');

        $req->execute(array($idRequest));

        return $req;
    }

    public static function GetMaxPoint($idSubDomain)
    {

        $bd = new PDO('mysql:host=localhost;dbname=HelpMe_Avocat;charset=utf8', 'root', '');

        $req = $bd->prepare('SELECT MAX(point) from lawyers WHERE  idSubDomain = ?');

        $req->execute(array($idSubDomain));

        $resultat = $req->fetch();

        return $resultat[0];
    }

    public static function GetMaxRevenue($idSubDomain)
    {

        $bd = new PDO('mysql:host=localhost;dbname=HelpMe_Avocat;charset=utf8', 'root', '');

        $req = $bd->prepare('SELECT MAX(revenue) from lawyers WHERE  idSubDomain = ?');

        $req->execute(array($idSubDomain));

        $resultat = $req->fetch();

        return $resultat[0];
    }

    public static function GetMaxCases($idSubDomain)
    {

        $bd = new PDO('mysql:host=localhost;dbname=HelpMe_Avocat;charset=utf8', 'root', '');

        $req = $bd->prepare('SELECT MAX(cases) from lawyers WHERE  idSubDomain = ?');

        $req->execute(array($idSubDomain));

        $resultat = $req->fetch();

        return $resultat[0];
    }

}