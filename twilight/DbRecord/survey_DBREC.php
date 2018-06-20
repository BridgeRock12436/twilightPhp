<?php







class survey_DBREC extends DbRecord
{
	private $family_number;
	private $family_generation;
	private $family_type;
	private $root;
	private $survey;
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
			$line.=$pre.$this->getFamily_number();
			$pre=$delim;
			$line.=$pre.$this->getFamily_generation();
			$pre=$delim;
			$line.=$pre.$this->getFamily_type();
			$pre=$delim;
			$line.=$pre.$this->getRoot();
			$pre=$delim;
			$line.=$pre.$this->getSurvey();
			$pre=$delim;
			$line.=$pre.$this->getValue();
			$pre=$delim;
			$line.=$pre.$this->getRowid();
			$pre=$delim;
	}
	public function getFamily_number()
	{
		return $this->family_number;
	}
	public function getFamily_generation()
	{
		return $this->family_generation;
	}
	public function getFamily_type()
	{
		return $this->family_type;
	}
	public function getRoot()
	{
		return $this->root;
	}
	public function getSurvey()
	{
		return $this->survey;
	}
	public function getValue()
	{
		return $this->value;
	}
	public function getRowid()
	{
		return $this->rowid;
	}
	public function setFamily_number($data)
	{
		$this->family_number=$data;
	}
	public function setFamily_generation($data)
	{
		$this->family_generation=$data;
	}
	public function setFamily_type($data)
	{
		$this->family_type=$data;
	}
	public function setRoot($data)
	{
		$this->root=$data;
	}
	public function setSurvey($data)
	{
		$this->survey=$data;
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
