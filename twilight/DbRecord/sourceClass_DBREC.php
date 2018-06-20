<?php







class sourceClass_DBREC extends DbRecord
{
	private $page;
	private $type;
	private $className;
	private $name;
	private $value;
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
			$line.=$pre.$this->getPage();
			$pre=$delim;
			$line.=$pre.$this->getType();
			$pre=$delim;
			$line.=$pre.$this->getClassName();
			$pre=$delim;
			$line.=$pre.$this->getName();
			$pre=$delim;
			$line.=$pre.$this->getValue();
			$pre=$delim;
			$line.=$pre.$this->getRowid();
			$pre=$delim;
	}
	public function getPage()
	{
		return $this->page;
	}
	public function getType()
	{
		return $this->type;
	}
	public function getClassName()
	{
		return $this->className;
	}
	public function getName()
	{
		return $this->name;
	}
	public function getValue()
	{
		return $this->value;
	}
	public function getRowid()
	{
		return $this->rowid;
	}
	public function setPage($data)
	{
		$this->page=$data;
	}
	public function setType($data)
	{
		$this->type=$data;
	}
	public function setClassName($data)
	{
		$this->className=$data;
	}
	public function setName($data)
	{
		$this->name=$data;
	}
	public function setValue($data)
	{
		$this->value=$data;
	}
	public function setRowid($data)
	{
		$this->rowid=$data;
	}
}



?>
