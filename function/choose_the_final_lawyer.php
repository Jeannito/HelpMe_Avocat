<?php

function ChooseTheFinalLawyer($lawyerObject) {

	$i = 0;
	$j = 0;
	$lawyerTemp;
	$lawyerTemp1;
	$lawyerTemp2;

	foreach ($lawyerObject as $lawyer) {

		$finalComp = $lawyerObject[$i]->getFormCompatibility() + $lawyerObject[$i]->getHelpMeCompatibility();

		$finalComp = $finalComp / 2;

		$lawyerObject[$i]->setFinalCompatibility($finalComp);
	}

	if($lawyerObject[0]->getFinalCompatibility() < $lawyerObject[1]->getFinalCompatibility()){
		$lawyerTemp = $lawyerObject[0];
		$lawyerObject[0] = $lawyerObject[1];
		$lawyerObject[1] = $lawyerTemp;
	}
	if($lawyerObject[1]->getFinalCompatibility() < $lawyerObject[2]->getFinalCompatibility()){
		$lawyerTemp = $lawyerObject[1];
		$lawyerObject[1] = $lawyerObject[2];
		$lawyerObject[2] = $lawyerTemp;
	}

	for ($j=3; $j < count($lawyerObject)-3; $j++){
		if($lawyerObject[0]->getFinalCompatibility() < $lawyerObject[$i]->getFinalCompatibility()){
			$lawyerTemp = $lawyerObject[0];
			$lawyerObject[0] = $lawyerObject[$i];
			$lawyerTemp1 = $lawyerObject[1];
			$lawyerObject[1] = $lawyerTemp;
			$lawyerTemp2 = $lawyerObject[2];
			$lawyerObject[2] = $lawyerTemp1;
			$lawyerObject[3] = $lawyerTemp2;
		} else if($lawyerObject[1]->getFinalCompatibility() < $lawyerObject[$i]->getFinalCompatibility()){
			$lawyerTemp1 = $lawyerObject[1];
			$lawyerObject[1] = $lawyerObject[$i];
			$lawyerTemp2 = $lawyerObject[2];
			$lawyerObject[2] = $lawyerTemp1;
			$lawyerObject[3] = $lawyerTemp2;
		} else if($lawyerObject[2]->getFinalCompatibility() < $lawyerObject[$i]->getFinalCompatibility()){
			$lawyerTemp2 = $lawyerObject[2];
			$lawyerObject[2] = $lawyerObject[$i];
			$lawyerObject[3] = $lawyerTemp2;
		}
	}
}


?>