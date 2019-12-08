<?php 
	
	class Room {		
		private $surveyID;
		private $userID;
		private $pin;
		private $status;
		private $date;
		private $hour;

		function __construct(){}
	
    /**
     * @return mixed
     */
    public function getSurveyID()
    {
        return $this->surveyID;
    }

    /**
     * @param mixed $surveyID
     *
     * @return self
     */
    public function setSurveyID($surveyID)
    {
        $this->surveyID = $surveyID;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * @param mixed $userID
     *
     * @return self
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPin()
    {
        return $this->pin;
    }

    /**
     * @param mixed $pin
     *
     * @return self
     */
    public function setPin($pin)
    {
        $this->pin = $pin;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     *
     * @return self
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * @param mixed $hour
     *
     * @return self
     */
    public function setHour($hour)
    {
        $this->hour = $hour;

        return $this;
    }
}


	
 ?>