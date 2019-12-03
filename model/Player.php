<?php 
	/**
	 * 
	 */
	class Player{
		private $roomID;
		private $name;
		function __construct(){}
			
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

	    /**
	     * @return mixed
	     */
	    public function getName()
	    {
	        return $this->name;
	    }

	    /**
	     * @param mixed $name
	     *
	     * @return self
	     */
	    public function setName($name)
	    {
	        $this->name = $name;

	        return $this;
	    }
	}

 ?>