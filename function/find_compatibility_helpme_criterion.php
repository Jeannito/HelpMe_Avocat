<?php

function FindCompatibilityHelpMeCriterion($lawyerAfterSecondStep, $criterionHelpMe, $request) {

	$tabCoeff = array(); //array of coefficients for the criterions
	$tabCriterion = array(); //array of the different criterions
	$tabValueCriterion = array(); //array with the value of each criterion of the request

	require_once '../model/model_lawyer.php';
	require_once '../model/model_subDomain.php';

	$subDomain = ModelSubDomain::GetSubDomainByLabel($request['subDomain']);

	$maxPoint = ModelLawyer::GetMaxPoint($subDomain['idSubDomain']);
	$maxRevenue = ModelLawyer::GetMaxRevenue($subDomain['idSubDomain']);
	$maxCases = ModelLawyer::GetMaxCases($subDomain['idSubDomain']);

	$i = 0;

	foreach ($criterionHelpMe as $criterions) { //retrieve data from the criterionForm array, assign criterions to criterion array, coefficients to coeff array
		$tabCriterion[$i] = $criterions['name'];
		$tabCoeff[$i] = floatval($criterions['coefficient']);
		$i++;
	}

	foreach ($lawyerAfterSecondStep as $lawyer) { //loop to calculate the compatibility % for each lawyer

		$c = 0.0; //initialization of the compatibility %
		
		$c = $c + $lawyer->getRating()*$tabCoeff[0]/5;

		$c = $c + $lawyer->getPoint()*$tabCoeff[1]/$maxPoint;

		$c = $c + $tabCoeff[2]-$tabCoeff[2]*$lawyer->getRevenue()/$maxRevenue;

		$c = $c + $tabCoeff[3]-$tabCoeff[3]*$lawyer->getCases()/$maxCases;

		$lawyer->setHelpMeCompatibility($c);

	}

	return $lawyerAfterSecondStep;

}