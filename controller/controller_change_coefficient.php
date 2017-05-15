<?php

if($_POST['type'] == 'form'){

	require_once '../model/model_criterion.php';

	$experience = $_POST['experience'];

	$personality = $_POST['personality'];

	$gender = $_POST['gender'];

	$position = $_POST['position'];

	ModelCriterion::ChangeCriterionFormCoeff($experience, $personality, $gender, $position);

	header('Location: ../controller/controller_manage_algo.php');

} else if ($_POST['type'] == 'helpme'){

	require_once '../model/model_criterion.php';

	$rating = $_POST['rating'];

	$point = $_POST['point'];

	$revenue = $_POST['revenue'];

	$cases = $_POST['cases'];

	ModelCriterion::ChangeCriterionHelpMeCoeff($rating, $point, $cases, $revenue);

	header('Location: ../controller/controller_manage_algo.php');

}



