<?php 

	class Question{
		
		private $surveyID;
		private $text;	

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
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     *
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }
}



 ?>