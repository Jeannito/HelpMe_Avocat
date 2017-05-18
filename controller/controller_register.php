<?php

require_once '../model/model_user.php';

require_once '../model/model_lawyer.php';

require_once '../model/model_request.php';

$lastname = $_POST['lastname'];

$firstname = $_POST['firstname'];

$gender = $_POST['gender'];

$position = $_POST['position'];

$experience = $_POST['experience'];

$personality = $_POST['personality'];

$subDomain = $_POST['subDomain'];

var_dump($_POST);

$tabUser = array(

	'lastname' => htmlspecialchars($lastname),

	'firstname' => htmlspecialchars($firstname)

	);

//ModelUser::RegisterUser($tabUser);

$userInformation = ModelUser::GetInformation($tabUser);

$tabRequest = array(

	'gender' => htmlspecialchars($gender),

	'position' => htmlspecialchars($position),

	'personality' => htmlspecialchars($personality),

	'experience' => htmlspecialchars($experience),

	'subDomain' => htmlspecialchars($subDomain),

	'idUser' => htmlspecialchars($userInformation['id'])

);

ModelRequest::RegisterRequest($tabRequest);

header('Location: ../controller/controller_members.php');