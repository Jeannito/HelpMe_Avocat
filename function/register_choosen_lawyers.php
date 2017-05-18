<?php

function RegisterChoosenLawyers($lawyerObject, $request) {

	require_once '../model/model_lawyer.php';


	for ($i=0; $i < 3; $i++){
		$idLawyer = $lawyerObject[$i]->getId();
		$formCompatibility = $lawyerObject[$i]->getFormCompatibility();
		$helpmeCompatibility = $lawyerObject[$i]->getHelpMeCompatibility();
		$finalCompatibility = $lawyerObject[$i]->getFinalCompatibility();
		$idRequest = $request['id'];
		$executionNumber = $request['numberOfExecution'];
		$datetime = date("Y-m-d H:i:s");

		$tab = array(

			'idLawyer' => $idLawyer,

			'idRequest' => $idRequest,

			'formCompatibility' => htmlspecialchars($formCompatibility),

			'helpmeCompatibility' => htmlspecialchars($helpmeCompatibility),

			'finalCompatibility' => htmlspecialchars($finalCompatibility),

			'executionNumber' => $executionNumber,

			'executionDate' => $datetime
		);

		ModelLawyer::RegisterTheChoosenLawyer($tab);

	}
}