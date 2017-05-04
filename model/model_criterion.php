<?php

/**
 * Created by PhpStorm.
 * User: jeanb2r
 * Date: 26/04/2017
 * Time: 16:45
 */
class ModelCriterion
{

    public function getCriterionForm()
    {

        $bd = new PDO('mysql:host=localhost;dbname=HelpMe_Avocat;charset=utf8', 'root', '');

        $req = $bd->prepare('SELECT * FROM criterion_form');

        $req -> execute();

        return $req;

    }


    /**
     * @return mixed
     */
    public function countCriterionForm()
    {

        $bd = new PDO('mysql:host=localhost;dbname=HelpMe_Avocat;charset=utf8', 'root', '');

        $req = $bd->prepare('SELECT COUNT(*) FROM criterion_form');

        $req -> execute();

        $resultat = $req->fetch();

        return $resultat[0];
    }

}