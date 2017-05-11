<?php

function FindCompatibilityForForm($lawyerObject, $criterionForm, $request) {

	$tabCoeff = array(); //array of coefficients for the criterions
	$tabCriterion = array(); //array of the different criterions
	$tabValueCriterion = array(); //array with the value of each criterion of the request

	$i = 0;

	foreach ($criterionForm as $criterions) { //retrieve data from the criterionForm array, assign criterions to criterion array, coefficients to coeff array
		$tabCriterion[$i] = $criterions['name'];
		$tabCoeff[$i] = floatval($criterions['coefficient']);
		$i++;
	}

	$n = floatval(count($tabCriterion)); //number of criterions

	for ($j=0; $j < $n; $j++) { //retrieve value of each criterion in the request
		$tabValueCriterion[$j] = $request[$tabCriterion[$j]];
	}

	foreach ($lawyerObject as $lawyer) { //loop to calculate the compatibility % for each lawyer

		$c = 0.0; //initialization of the compatibility %

		$k = 0;
		
		for($k=0; $k < $n; $k++) { //loop to compare the lawyer's properties with the desired criterions

			if($tabValueCriterion[$k] == $lawyer->getInfo($tabCriterion[$k]) || $tabValueCriterion[$k] == 'I don\'t care') { //if the values match, our compatibility percentage increases
				$c += $tabCoeff[$k];
			}
		}
		$lawyer->setFormCompatibility($c);
		$lawyer->setHelpMeCompatibility(0.5);

	}

	return $lawyerObject;

}

?>

