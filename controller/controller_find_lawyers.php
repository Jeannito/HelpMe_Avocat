<?php

require_once '../model/model_request.php';

require_once '../model/model_lawyer.php';

require_once '../model/model_criterion.php';

require_once '../model/model_subDomain.php';

require_once '../function/changeInObject.php';

require_once '../function/find_compatibility_form.php';

$request = ModelRequest::GetRequest($_POST['id_request']);

$subDomain = ModelSubDomain::GetSubDomainByLabel($request['subDomain']);

$lawyersBySkill = ModelLawyer::getBySubDomain($subDomain['idSubDomain']);

$lawyerObject = ChangeInObject($lawyersBySkill);

$criterionForm = ModelCriterion::getCriterionForm();

$lawyerAfterSecondStep = FindCompatibilityForForm($lawyerObject, $criterionForm, $request);

echo $lawyerObject[2]->getFormCompatibility();

/*$lawyerAfterThirdStep = FindCompatibilityHelpMeCriterion($lawyerAfterSecondStep);

$lawyerFinal = ChooseTheFinalLawyer($lawyerAfterThirdStep);

ModelLawyer::RegisterTheChoosenLawyers($lawyerFinal);

ModelRequest::TreatRequest($_POST['id_request']);

require_once '../view/request.php';*/

