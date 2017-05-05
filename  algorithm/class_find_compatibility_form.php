<?php

function FindCompatibilityForForm($lawyerObject, $criterionForm) {

	$n = count($criterionForm); //number of criterions
	$sum = 0; //initialization of the sum used to calculate the compatibility %
	$c = 0; //initialization of the compatibility %

	$tabCoeff = array(n); //array of coefficients
	$tabCriterion = array(n); //array of criterions

	foreach ($criterionForm as $criterions) { //retrieve data from the criterionForm array, assign criterions to criterion array, coefficients to coeff array
		$tabCriterion = $criterions['name'];
		$tabCoeff = $criterions['coefficient'];
	}

	foreach ($lawyerObject as $lawyer) { //loop to calculate the compatibility %
		
		foreach ($tabCriterion as $criterion) { //loop to compare the lawyer's properties with the desired criterions

			$i = 0;

			if($criterion == $lawyerObject->genre()) {
				$sum += $tabCoeff[i];
				i++;
			}
			
		}

		$c = $n*$sum;

	}

}

?>

