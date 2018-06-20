<?php







class sourceHold_DBREC extends DbRecord
{
	private $PageType;
	private $className;
	private $ACTIVE;
	private $dateAddFlag;
	private $rowPos;
	private $colPos;
	private $recordKey;
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
			$line.=$pre.$this->getPageType();
			$pre=$delim;
			$line.=$pre.$this->getClassName();
			$pre=$delim;
			$line.=$pre.$this->getACTIVE();
			$pre=$delim;
			$line.=$pre.$this->getDateAddFlag();
			$pre=$delim;
			$line.=$pre.$this->getRowPos();
			$pre=$delim;
			$line.=$pre.$this->getColPos();
			$pre=$delim;
			$line.=$pre.$this->getRecordKey();
			$pre=$delim;
			$line.=$pre.$this->getRowid();
			$pre=$delim;
	}
	public function getPageType()
	{
		return $this->PageType;
	}
	public function getClassName()
	{
		return $this->className;
	}
	public function getACTIVE()
	{
		return $this->ACTIVE;
	}
	public function getDateAddFlag()
	{
		return $this->dateAddFlag;
	}
	public function getRowPos()
	{
		return $this->rowPos;
	}
	public function getColPos()
	{
		return $this->colPos;
	}
	public function getRecordKey()
	{
		return $this->recordKey;
	}
	public function getRowid()
	{
		return $this->rowid;
	}
	public function setPageType($data)
	{
		$this->PageType=$data;
	}
	public function setClassName($data)
	{
		$this->className=$data;
	}
	public function setACTIVE($data)
	{
		$this->ACTIVE=$data;
	}
	public function setDateAddFlag($data)
	{
		$this->dateAddFlag=$data;
	}
	public function setRowPos($data)
	{
		$this->rowPos=$data;
	}
	public function setColPos($data)
	{
		$this->colPos=$data;
	}
	public function setRecordKey($data)
	{
		$this->recordKey=$data;
	}
	public function setRowid($data)
	{
		$this->rowid=$data;
	}
}



?>
