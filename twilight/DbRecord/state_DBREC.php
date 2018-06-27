<?php







class state_DBREC extends DbRecord
{
	private $state;
	private $description;
	public function __construct()
	{
		parent::__construct();
	}


	function __destruct()
	{
	}
	public function toString($delim)
	{
			$line="";
			$pre="";
			$line.=$pre.$this->getState();
			$pre=$delim;
			$line.=$pre.$this->getDescription();
			$pre=$delim;
		return $line;
	}
	public function getState()
	{
		return $this->state;
	}
	public function getDescription()
	{
		return $this->description;
	}
	public function setState($data)
	{
		$this->state=$data;
	}
	public function setDescription($data)
	{
		$this->description=$data;
	}
}



?>
