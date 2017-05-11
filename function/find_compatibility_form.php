<?php

function FindCompatibilityForForm($lawyerObject, $criterionForm, $request) {

	$sum = 0; //initialization of the sum used to calculate the compatibility %
	$c = 0; //initialization of the compatibility %

	$tabCoeff = array(); //array of coefficients for the criterions
	$tabCriterion = array(); //array of the different criterions
	$tabValueCriterion = array(); //array with the value of each criterion of the request

	$i = 0;

	foreach ($criterionForm as $criterions) { //retrieve data from the criterionForm array, assign criterions to criterion array, coefficients to coeff array
		$tabCriterion[$i] = $criterions['name'];
		$tabCoeff[$i] = $criterions['coefficient'];
		$i++;
	}

	$n = count($tabCriterion); //number of criterions

	for ($j=0; $j < $n; $j++) { //retrieve value of each criterion in the request
		$tabValueCriterion[$j] = $request[$tabCriterion[$j]];
	}

	//echo $lawyerObject[0]->getGender();

	foreach ($lawyerObject as $lawyer) { //loop to calculate the compatibility % for each lawyer
		
		foreach ($tabValueCriterion as $criterion) { //loop to compare the lawyer's properties with the desired criterions

			$k = 0;

			if($tabValueCriterion[$k] == $lawyer->getInfo($tabCriterion[$k]) || $tabValueCriterion[$k] == 'I don\'t care') { //if the values match, our compatibility percentage increases
				$sum += $tabCoeff[$k]*$n;
				$k++;
			}
			else {
				$k++;
			}
			
		}

		$c = $n*$sum;
		$lawyer->setFormCompatibility($c);

	}

	return $lawyerObject;

}

?>

