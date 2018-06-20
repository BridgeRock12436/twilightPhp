<?php







class statistics_DBREC extends DbRecord
{
	private $Userid;
	private $rowid;
	private $DisplayName;
	private $Time;
	private $IPADDRESS;
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
			$line.=$pre.$this->getUserid();
			$pre=$delim;
			$line.=$pre.$this->getRowid();
			$pre=$delim;
			$line.=$pre.$this->getDisplayName();
			$pre=$delim;
			$line.=$pre.$this->getTime();
			$pre=$delim;
			$line.=$pre.$this->getIPADDRESS();
			$pre=$delim;
	}
	public function getUserid()
	{
		return $this->Userid;
	}
	public function getRowid()
	{
		return $this->rowid;
	}
	public function getDisplayName()
	{
		return $this->DisplayName;
	}
	public function getTime()
	{
		return $this->Time;
	}
	public function getIPADDRESS()
	{
		return $this->IPADDRESS;
	}
	public function setUserid($data)
	{
		$this->Userid=$data;
	}
	public function setRowid($data)
	{
		$this->rowid=$data;
	}
	public function setDisplayName($data)
	{
		$this->DisplayName=$data;
	}
	public function setTime($data)
	{
		$this->Time=$data;
	}
	public function setIPADDRESS($data)
	{
		$this->IPADDRESS=$data;
	}
}



?>
