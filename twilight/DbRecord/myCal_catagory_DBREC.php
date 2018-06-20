<?php







class myCal_catagory_DBREC extends DbRecord
{
	private $catagory;
	private $color;
	private $sortKey;
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
			$line.=$pre.$this->getCatagory();
			$pre=$delim;
			$line.=$pre.$this->getColor();
			$pre=$delim;
			$line.=$pre.$this->getSortKey();
			$pre=$delim;
			$line.=$pre.$this->getRowid();
			$pre=$delim;
	}
	public function getCatagory()
	{
		return $this->catagory;
	}
	public function getColor()
	{
		return $this->color;
	}
	public function getSortKey()
	{
		return $this->sortKey;
	}
	public function getRowid()
	{
		return $this->rowid;
	}
	public function setCatagory($data)
	{
		$this->catagory=$data;
	}
	public function setColor($data)
	{
		$this->color=$data;
	}
	public function setSortKey($data)
	{
		$this->sortKey=$data;
	}
	public function setRowid($data)
	{
		$this->rowid=$data;
	}
}



?>
