<?php

/**
 * Created by PhpStorm.
 * User: jeanb2r
 * Date: 26/04/2017
 * Time: 16:45
 */
class ModelCriterion
{

    public static function GetCriterionForm()
    {

        $bd = new PDO('mysql:host=localhost;dbname=HelpMe_Avocat;charset=utf8', 'root', '');

        $req = $bd->prepare('SELECT * FROM criterion_form');

        $req -> execute();

        return $req;

    }

    public static function GetCriterionHelpMe()
    {

        $bd = new PDO('mysql:host=localhost;dbname=HelpMe_Avocat;charset=utf8', 'root', '');

        $req = $bd->prepare('SELECT * FROM criterion_helpme');

        $req -> execute();

        return $req;

    }



    /**
     * @return mixed
     */
    public static function countCriterionForm()
    {

        $bd = new PDO('mysql:host=localhost;dbname=HelpMe_Avocat;charset=utf8', 'root', '');

        $req = $bd->prepare('SELECT COUNT(*) FROM criterion_form');

        $req -> execute();

        $resultat = $req->fetch();

        return $resultat[0];
    }

    public static function ChangeCriterionFormCoeff($experience, $personality, $gender, $position)
    {

        $bd = new PDO('mysql:host=localhost;dbname=HelpMe_Avocat;charset=utf8', 'root', '');

        $req = $bd->prepare('UPDATE criterion_form SET coefficient = ? WHERE name = "experience"');

        $req -> execute(array($experience));

        $req = $bd->prepare('UPDATE criterion_form SET coefficient = ? WHERE name = "gender"');

        $req -> execute(array($gender));

        $req = $bd->prepare('UPDATE criterion_form SET coefficient = ? WHERE name = "personality"');

        $req -> execute(array($personality));

        $req = $bd->prepare('UPDATE criterion_form SET coefficient = ? WHERE name = "proximity"');

        $req -> execute(array($position));


        return $req;

    }

        public static function ChangeCriterionHelpMeCoeff($rating, $point, $cases, $revenue)
    {

        $bd = new PDO('mysql:host=localhost;dbname=HelpMe_Avocat;charset=utf8', 'root', '');

        $req = $bd->prepare('UPDATE criterion_helpme SET coefficient = ? WHERE name = "rating"');

        $req -> execute(array($rating));

        $req = $bd->prepare('UPDATE criterion_helpme SET coefficient = ? WHERE name = "point"');

        $req -> execute(array($point));

        $req = $bd->prepare('UPDATE criterion_helpme SET coefficient = ? WHERE name = "cases"');

        $req -> execute(array($cases));

        $req = $bd->prepare('UPDATE criterion_helpme SET coefficient = ? WHERE name = "revenue"');

        $req -> execute(array($revenue));


        return $req;

    }


}