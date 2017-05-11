<?php

function FindCompatibilityForForm($lawyerObject, $criterionForm, $request) {

	$n = count($criterionForm); //number of criterions
	$sum = 0; //initialization of the sum used to calculate the compatibility %
	$c = 0; //initialization of the compatibility %

	$tabCoeff = array($n); //array of coefficients for the criterions
	$tabCriterion = array($n); //array of the different criterions
	$tabValueCriterion = array($n); //array with the value of each criterion of the request

	foreach ($criterionForm as $criterions) { //retrieve data from the criterionForm array, assign criterions to criterion array, coefficients to coeff array
		$i = 0;
		$tabCriterion[$i] = $criterions['name'];
		$tabCoeff[$i] = $criterions['coefficient'];
		$i++;
	}

	for ($i=0; $i <= $n; $i++) { //retrieve value of each criterion in the request
		$tabValueCriterion[$i] = $request[$tabCriterion[$i]];
	}

	foreach ($lawyerObject as $lawyer) { //loop to calculate the compatibility % for each lawyer
		
		foreach ($tabValueCriterion as $criterion) { //loop to compare the lawyer's properties with the desired criterions

			$i = 0;

			if($tabValueCriterion[$i] == $lawyerObject->get($tabCriterion[$i]) || $tabValueCriterion[$i] == 'I don\'t care') { //if the values match, our compatibility percentage increases
				$sum += $tabCoeff[$i]*$n;
				$i++;
			}
			else {
				$i++;
			}
			
		}

		$c = $n*$sum;
		$lawyerObject->setFormCompatibility($c);

	}

}

?>

