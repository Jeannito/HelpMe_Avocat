<?php

$timestamp_debut = microtime(true);

require_once '../model/model_request.php';

require_once '../model/model_lawyer.php';

require_once '../model/model_criterion.php';

require_once '../model/model_subDomain.php';

require_once '../function/changeInObject.php';

require_once '../function/find_compatibility_form.php';

require_once '../function/find_compatibility_helpme_criterion.php';

require_once '../function/choose_the_final_lawyer.php';

require_once '../function/register_choosen_lawyers.php';

$request = ModelRequest::GetRequest($_POST['id_request']);

$subDomain = ModelSubDomain::GetSubDomainByLabel($request['subDomain']);

$lawyersBySkill = ModelLawyer::getBySubDomain($subDomain['idSubDomain']);

$lawyerObject = ChangeInObject($lawyersBySkill);

$criterionForm = ModelCriterion::getCriterionForm();

$lawyerAfterSecondStep = FindCompatibilityForForm($lawyerObject, $criterionForm, $request);

$criterionHelpMe = ModelCriterion::getCriterionHelpMe();

$lawyerAfterThirdStep = FindCompatibilityHelpMeCriterion($lawyerAfterSecondStep, $criterionHelpMe, $request);


$lawyerFinal = ChooseTheFinalLawyer($lawyerAfterSecondStep);

RegisterChoosenLawyers($lawyerFinal, $request);

ModelRequest::TreatRequest($_POST['id_request']);

$timestamp_fin = microtime(true);

$difference_ms = $timestamp_fin - $timestamp_debut;

$tab = array(
	'executionTime' => $difference_ms,
	'id' => $_POST['id_request']
	);

ModelRequest::AddExecutionTime($tab);

require_once '../view/request.php';

