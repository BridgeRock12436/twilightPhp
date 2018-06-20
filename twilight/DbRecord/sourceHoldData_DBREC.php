<?php







class sourceHoldData_DBREC extends DbRecord
{
	private $DATEADDED;
	private $DESCRIPTION;
	private $TYPE;
	private $FILENAME;
	private $TEXT;
	private $ACTIVE;
	private $rowid;
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
			$line.=$pre.$this->getDATEADDED();
			$pre=$delim;
			$line.=$pre.$this->getDESCRIPTION();
			$pre=$delim;
			$line.=$pre.$this->getTYPE();
			$pre=$delim;
			$line.=$pre.$this->getFILENAME();
			$pre=$delim;
			$line.=$pre.$this->getTEXT();
			$pre=$delim;
			$line.=$pre.$this->getACTIVE();
			$pre=$delim;
			$line.=$pre.$this->getRowid();
			$pre=$delim;
	}
	public function getDATEADDED()
	{
		return $this->DATEADDED;
	}
	public function getDESCRIPTION()
	{
		return $this->DESCRIPTION;
	}
	public function getTYPE()
	{
		return $this->TYPE;
	}
	public function getFILENAME()
	{
		return $this->FILENAME;
	}
	public function getTEXT()
	{
		return $this->TEXT;
	}
	public function getACTIVE()
	{
		return $this->ACTIVE;
	}
	public function getRowid()
	{
		return $this->rowid;
	}
	public function setDATEADDED($data)
	{
		$this->DATEADDED=$data;
	}
	public function setDESCRIPTION($data)
	{
		$this->DESCRIPTION=$data;
	}
	public function setTYPE($data)
	{
		$this->TYPE=$data;
	}
	public function setFILENAME($data)
	{
		$this->FILENAME=$data;
	}
	public function setTEXT($data)
	{
		$this->TEXT=$data;
	}
	public function setACTIVE($data)
	{
		$this->ACTIVE=$data;
	}
	public function setRowid($data)
	{
		$this->rowid=$data;
	}
}



?>
