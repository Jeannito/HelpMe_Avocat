<?php

require_once '../model/model_request.php';

require_once '../model/model_lawyer.php';

require_once '../model/model_criterion.php';

require_once '../model/model_subDomain.php';

require_once '../function/changeInObject.php';

require_once '../function/find_compatibility_form.php';

require_once '../function/choose_the_final_lawyer.php';

require_once '../function/register_choosen_lawyers.php';

$request = ModelRequest::GetRequest($_POST['id_request']);

$subDomain = ModelSubDomain::GetSubDomainByLabel($request['subDomain']);

$lawyersBySkill = ModelLawyer::getBySubDomain($subDomain['idSubDomain']);

$lawyerObject = ChangeInObject($lawyersBySkill);

//echo $lawyerObject[0]->getLastname();

$criterionForm = ModelCriterion::getCriterionForm();

$lawyerAfterSecondStep = FindCompatibilityForForm($lawyerObject, $criterionForm, $request);

//var_dump($lawyerAfterSecondStep);

//$lawyerAfterThirdStep = FindCompatibilityHelpMeCriterion($lawyerAfterSecondStep);

$lawyerFinal = ChooseTheFinalLawyer($lawyerAfterSecondStep);

RegisterChoosenLawyers($lawyerFinal, $request);

ModelRequest::TreatRequest($_POST['id_request']);*/

require_once '../view/request.php';

