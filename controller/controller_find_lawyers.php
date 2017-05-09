<?php

require_once '../model/model_request.php';

require_once '../model/model_lawyer.php';

require_once '../model/model_criterion.php';

$request = ModelRequest::GetRequest($_POST['id_request']);

$lawyersBySkill = ModelLawyer::getBySubDomain($request['$subDomain']);

$lawyerObject = ChangeInObject($lawyersBySkill);

$criterionForm = ModelCriterion::getCriterionForm();

$lawyerAfterSecondStep = FindCompatibilityForForm($lawyerObject, $criterionForm);

$lawyerAfterThirdStep = FindCompatibilityHelpMeCriterion($lawyerAfterSecondStep);

$lawyerFinal = ChooseTheFinalLawyer($lawyerAfterThirdStep);

ModelLawyer::RegisterTheChoosenLawyers($lawyerFinal);

ModelRequest::TreatRequest($_POST['id_request']);

require_once '../view/request.php';

