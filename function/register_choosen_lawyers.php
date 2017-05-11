<?php

function RegisterChoosenLawyers($lawyerObject, $request) {

	require_once '../model/model_lawyer.php';


	for ($i=0; $i < 3; $i++){
		$idLawyer = $lawyerObject[$i]->getId();
		$formCompatibility = $lawyerObject[$i]->getFormCompatibility();
		$helpmeCompatibility = $lawyerObject[$i]->getHelpMeCompatibility();
		$finalCompatibility = $lawyerObject[$i]->getFinalCompatibility();
		$idRequest = $request['id'];

		$tab = array(

			'idLawyer' => $idLawyer,

			'idRequest' => $idRequest,

			'formCompatibility' => htmlspecialchars($formCompatibility),

			'helpmeCompatibility' => htmlspecialchars($helpmeCompatibility),

			'finalCompatibility' => htmlspecialchars($finalCompatibility)
		);

		ModelLawyer::RegisterTheChoosenLawyer($tab);

	}
}