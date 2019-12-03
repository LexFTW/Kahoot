<?php 
	/**
	 * 
	 */
	class Vote {
		
		private $playerID;
		private $roomID;

		function __construct(){}
	
    /**
     * @return mixed
     */
    public function getPlayerID()
    {
        return $this->playerID;
    }

    /**
     * @param mixed $playerID
     *
     * @return self
     */
    public function setPlayerID($playerID)
    {
        $this->playerID = $playerID;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRoomID()
    {
        return $this->roomID;
    }

    /**
     * @param mixed $roomID
     *
     * @return self
     */
    public function setRoomID($roomID)
    {
        $this->roomID = $roomID;

        return $this;
    }
}

	
 ?>