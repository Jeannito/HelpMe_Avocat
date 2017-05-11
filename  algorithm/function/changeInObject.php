<?php

function ChangeInObject($lawyers) {

	require_once '../model/model_subDomain.php';
	require_once '../class/class_lawyer.php';

	$lawyerArray = array();

	foreach ($lawyers as $lawyer) {
	  $id = $lawyer -> id;
	  $firstname = $lawyer -> firstname;
	  $lastname = $lawyer -> lastname;
	  $gender = $lawyer -> gender;
	  $experience = $lawyer -> experience;
	  $proximity = $lawyer -> proximity;
	  $personality = $lawyer -> personality;
	  $idSubDomain = $lawyer -> idSubDomain;

	  $reqId = ModelSubDomain::GetInformationById($idSubDomain);

	  $subDomain = $reqId['label'];

	  $theLawyer = new Lawyer;

	  $theLawyer->setId($id);
	  $theLawyer->setLastname($lastname);
	  $theLawyer->setGender($gender);
	  $theLawyer->setExperience($experience);
	  $theLawyer->setPosition($proximity);
	  $theLawyer->setPersonality($personality);
	  $theLawyer->setSubDomain($subDomain);

	  array_push(Lawyer::$lawyerArray, $theLawyer);

	}
}