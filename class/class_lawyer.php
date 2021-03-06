<?php

class Lawyer{

    private $_id;
    private $_firstname;
    private $_lastname;
	private $_experience;
  	private $_position;
  	private $_subDomain;
  	private $_gender;
  	private $_personality;
  	private $_point;
  	private $_rating;
  	private $_revenue;
  	private $_cases;
  	private $_formCompatibility;
  	private $_helpMeCompatibility;
  	private $_finalCompatibility;

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->_position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->_position = $position;
    }

    /**
     * @return mixed
     */
    public function getExperience()
    {
        return $this->_experience;
    }

    /**
     * @param mixed $experience
     */
    public function setExperience($experience)
    {
        $this->_experience = $experience;
    }

    /**
     * @return mixed
     */
    public function getSubDomain()
    {
        return $this->_subDomain;
    }

    /**
     * @param mixed $subDomain
     */
    public function setSubDomain($subDomain)
    {
        $this->_subDomain = $subDomain;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->_gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->_gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getPersonality()
    {
        return $this->_personality;
    }

    /**
     * @param mixed $personality
     */
    public function setPersonality($personality)
    {
        $this->_personality = $personality;
    }

    /**
     * @return mixed
     */
    public function getFormCompatibility()
    {
        return $this->_formCompatibility;
    }

    /**
     * @param mixed $formCompatibility
     */
    public function setFormCompatibility($formCompatibility)
    {
        $this->_formCompatibility = $formCompatibility;
    }

    /**
     * @return mixed
     */
    public function getHelpMeCompatibility()
    {
        return $this->_helpMeCompatibility;
    }

    /**
     * @param mixed $helpMeCompatibility
     */
    public function setHelpMeCompatibility($helpMeCompatibility)
    {
        $this->_helpMeCompatibility = $helpMeCompatibility;
    }

    /**
     * @return mixed
     */
    public function getFinalCompatibility()
    {
        return $this->_finalCompatibility;
    }

    /**
     * @param mixed $finalCompatibility
     */
    public function setFinalCompatibility($finalCompatibility)
    {
        $this->_finalCompatibility = $finalCompatibility;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    public function getInfo($criterion)
    {
        if($criterion == 'gender'){
           return $this->_gender; 
        }
        if($criterion == 'personality'){
           return $this->_personality; 
        }
        if($criterion == 'experience'){
           return $this->_experience; 
        }
        if($criterion == 'position'){
           return $this->_position; 
        }
        return 'No criterions found';
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->_firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->_firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->_lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->_lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getPoint()
    {
        return $this->_point;
    }

    /**
     * @param mixed $point
     */
    public function setPoint($point)
    {
        $this->_point = $point;
    }

    /**
     * @return mixed
     */
    public function getRating()
    {
        return $this->_rating;
    }

    /**
     * @param mixed $rating
     */
    public function setRating($rating)
    {
        $this->_rating = $rating;
    }

    /**
     * @return mixed
     */
    public function getRevenue()
    {
        return $this->_revenue;
    }

    /**
     * @param mixed $revenue
     */
    public function setRevenue($revenue)
    {
        $this->_revenue = $revenue;
    }

    /**
     * @return mixed
     */
    public function getCases()
    {
        return $this->_cases;
    }

    /**
     * @param mixed $cases
     */
    public function setCases($cases)
    {
        $this->_cases = $cases;
    }
}