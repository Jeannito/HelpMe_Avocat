<?php

function FindCompatibilityForForm($lawyerObject, $criterionForm, $request) {

	int n = count($criterionForm); //number of criterions
	int sum = 0; //initialization of the sum used to calculate the compatibility %
	int c = 0; //initialization of the compatibility %

	$tabCoeff = array(n); //array of coefficients for the criterions
	$tabCriterion = array(n); //array of the different criterions
	$tabValueCriterion = array(n); //array with the value of each criterion of the request

	foreach ($criterionForm as $criterions) { //retrieve data from the criterionForm array, assign criterions to criterion array, coefficients to coeff array
		$tabCriterion = $criterions['name'];
		$tabCoeff = $criterions['coefficient'];
	}

	foreach ($request as $criterionRequest) {

		int i = 0;
		int j = 0;

		if($criterionRequest[i] == $tabCriterion[j]) {
			$tabValueCriterion = $criterionRequest[$tabCriterion[j]];
			i++;
			j++;
		}
		else {
			j++;
		}

	}

	foreach ($lawyerObject as $lawyer) { //loop to calculate the compatibility %
		
		foreach ($tabValueCriterion as $criterion) { //loop to compare the lawyer's properties with the desired criterions

			i = 0;

			if($criterion == $lawyerObject-> {
				$sum += $tabCoeff[i];
				i++;
			}
			
		}

		$c = $n*$sum;

	}

}

?>

