<?php







class Member_Convert_DBREC extends DbRecord
{
	private $ID;
	private $FAMILY_NUMBER;
	private $FAMILY_TYPE;
	private $FAMILY_GENERATION;
	private $ROOT;
	private $TWILIGHT_ID;
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
			$line.=$pre.$this->getID();
			$pre=$delim;
			$line.=$pre.$this->getFAMILY_NUMBER();
			$pre=$delim;
			$line.=$pre.$this->getFAMILY_TYPE();
			$pre=$delim;
			$line.=$pre.$this->getFAMILY_GENERATION();
			$pre=$delim;
			$line.=$pre.$this->getROOT();
			$pre=$delim;
			$line.=$pre.$this->getTWILIGHT_ID();
			$pre=$delim;
			return $line;
	}
	public function getID()
	{
		return $this->ID;
	}
	public function getFAMILY_NUMBER()
	{
		return $this->FAMILY_NUMBER;
	}
	public function getFAMILY_TYPE()
	{
		return $this->FAMILY_TYPE;
	}
	public function getFAMILY_GENERATION()
	{
		return $this->FAMILY_GENERATION;
	}
	public function getROOT()
	{
		return $this->ROOT;
	}
	public function getTWILIGHT_ID()
	{
		return $this->TWILIGHT_ID;
	}
	public function setID($data)
	{
		$this->ID=$data;
	}
	public function setFAMILY_NUMBER($data)
	{
		$this->FAMILY_NUMBER=$data;
	}
	public function setFAMILY_TYPE($data)
	{
		$this->FAMILY_TYPE=$data;
	}
	public function setFAMILY_GENERATION($data)
	{
		$this->FAMILY_GENERATION=$data;
	}
	public function setROOT($data)
	{
		$this->ROOT=$data;
	}
	public function setTWILIGHT_ID($data)
	{
		$this->TWILIGHT_ID=$data;
	}
}



?>
