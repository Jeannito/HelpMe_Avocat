<?php

$request = ModelRequest::GetRequest($_POST['id_request']);

$lawyersBySkill = ModelLawyers::GetLawyersBySubDomain($request['$subDomain']);

$lawyerObject = ChangeInObject($lawyersBySkill);

$lawyerAfterSecondStep = FindCompatibilityForForm($lawyerObject);

$lawyerAfterThirdStep = FindCompatibilityHelpMeCriterion($lawyerAfterSecondStep);

$lawyerFinal = ChooseTheFinalLawyer($lawyerAfterThirdStep);

ModelLawyers::RegisterTheChoosenLawyers($lawyerFinal);

ModelRequest::TreatRequest($_POST['id_request']);

require_once '../view/request.php';