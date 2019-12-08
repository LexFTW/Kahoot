<?php 
	/**
	 * 
	 */
	class Answer {
		
		private $questionID;
		private $text;
		private $rightAnswer;

		function __construct(){}

	
    /**
     * @return mixed
     */
    public function getQuestionID()
    {
        return $this->questionID;
    }

    /**
     * @param mixed $questionID
     *
     * @return self
     */
    public function setQuestionID($questionID)
    {
        $this->questionID = $questionID;

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

    /**
     * @return mixed
     */
    public function getRightAnswer()
    {
        return $this->rightAnswer;
    }

    /**
     * @param mixed $rightAnswer
     *
     * @return self
     */
    public function setRightAnswer($rightAnswer)
    {
        $this->rightAnswer = $rightAnswer;

        return $this;
    }
}
 ?>