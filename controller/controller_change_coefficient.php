<?php

require_once '../model/model_criterion.php';

$experience = $_POST['experience'];

$personality = $_POST['personality'];

$gender = $_POST['gender'];

$position = $_POST['position'];

$tab = array(

	'experience' => htmlspecialchars($experience),

	'personality' => htmlspecialchars($personality),

	'gender' => htmlspecialchars($gender),

	'position' => htmlspecialchars($position)
);

ModelCriterion::ChangeCriterionCoeff($experience, $personality, $gender, $position);

header('Location: ../controller/controller_manage_algo.php');

