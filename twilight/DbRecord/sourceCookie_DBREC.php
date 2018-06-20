<?php







class sourceCookie_DBREC extends DbRecord
{
	private $phpsessid;
	private $name;
	private $value;
	private $dateAdded;
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
			$line.=$pre.$this->getPhpsessid();
			$pre=$delim;
			$line.=$pre.$this->getName();
			$pre=$delim;
			$line.=$pre.$this->getValue();
			$pre=$delim;
			$line.=$pre.$this->getDateAdded();
			$pre=$delim;
			$line.=$pre.$this->getRowid();
			$pre=$delim;
	}
	public function getPhpsessid()
	{
		return $this->phpsessid;
	}
	public function getName()
	{
		return $this->name;
	}
	public function getValue()
	{
		return $this->value;
	}
	public function getDateAdded()
	{
		return $this->dateAdded;
	}
	public function getRowid()
	{
		return $this->rowid;
	}
	public function setPhpsessid($data)
	{
		$this->phpsessid=$data;
	}
	public function setName($data)
	{
		$this->name=$data;
	}
	public function setValue($data)
	{
		$this->value=$data;
	}
	public function setDateAdded($data)
	{
		$this->dateAdded=$data;
	}
	public function setRowid($data)
	{
		$this->rowid=$data;
	}
}



?>
