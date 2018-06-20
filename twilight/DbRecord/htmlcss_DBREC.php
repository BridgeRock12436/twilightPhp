<?php







class htmlcss_DBREC extends DbRecord
{
	private $page_name;
	private $type;
	private $classname;
	private $typeA;
	private $browser;
	private $userid;
	private $attribute;
	private $value;
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
			$line.=$pre.$this->getPage_name();
			$pre=$delim;
			$line.=$pre.$this->getType();
			$pre=$delim;
			$line.=$pre.$this->getClassname();
			$pre=$delim;
			$line.=$pre.$this->getTypeA();
			$pre=$delim;
			$line.=$pre.$this->getBrowser();
			$pre=$delim;
			$line.=$pre.$this->getUserid();
			$pre=$delim;
			$line.=$pre.$this->getAttribute();
			$pre=$delim;
			$line.=$pre.$this->getValue();
			$pre=$delim;
	}
	public function getPage_name()
	{
		return $this->page_name;
	}
	public function getType()
	{
		return $this->type;
	}
	public function getClassname()
	{
		return $this->classname;
	}
	public function getTypeA()
	{
		return $this->typeA;
	}
	public function getBrowser()
	{
		return $this->browser;
	}
	public function getUserid()
	{
		return $this->userid;
	}
	public function getAttribute()
	{
		return $this->attribute;
	}
	public function getValue()
	{
		return $this->value;
	}
	public function setPage_name($data)
	{
		$this->page_name=$data;
	}
	public function setType($data)
	{
		$this->type=$data;
	}
	public function setClassname($data)
	{
		$this->classname=$data;
	}
	public function setTypeA($data)
	{
		$this->typeA=$data;
	}
	public function setBrowser($data)
	{
		$this->browser=$data;
	}
	public function setUserid($data)
	{
		$this->userid=$data;
	}
	public function setAttribute($data)
	{
		$this->attribute=$data;
	}
	public function setValue($data)
	{
		$this->value=$data;
	}
}



?>
