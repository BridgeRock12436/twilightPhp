<?php







class myCal_user_DBREC extends DbRecord
{
	private $userid;
	private $catagory;
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
			$line.=$pre.$this->getUserid();
			$pre=$delim;
			$line.=$pre.$this->getCatagory();
			$pre=$delim;
			$line.=$pre.$this->getRowid();
			$pre=$delim;
		return $line;
	}
	public function getUserid()
	{
		return $this->userid;
	}
	public function getCatagory()
	{
		return $this->catagory;
	}
	public function getRowid()
	{
		return $this->rowid;
	}
	public function setUserid($data)
	{
		$this->userid=$data;
	}
	public function setCatagory($data)
	{
		$this->catagory=$data;
	}
	public function setRowid($data)
	{
		$this->rowid=$data;
	}
}



?>
