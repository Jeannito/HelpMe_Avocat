<?php

class Lawyer{

	private $_experience;
  	private $_position;
  	private $_subDomain;
  	private $_gender;
  	private $_personality;
  	private $_formCompatibility;
  	private $_helpMeCompatibility;
  	private $_finalCompatibility;

  public function setExperience($experience)
  {
  	$_experience = $experience;
  }
        
  public function getExperience()
  {
  	return $experience;
  }

  

}