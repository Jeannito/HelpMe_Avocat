<?php

/**
 * Created by PhpStorm.
 * User: jeanb2r
 * Date: 26/04/2017
 * Time: 16:44
 */
class ModelDepartement
{

    public static function GetDepartement(){

    $bd = new PDO('mysql:host=localhost;dbname=HelpMe_Avocat;charset=utf8', 'root', '');

    $req = $bd->query('SELECT * FROM departement');

    return $req -> fetchAll(PDO::FETCH_OBJ);

        
    }

}