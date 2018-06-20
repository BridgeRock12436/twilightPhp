<?php







class htmltable_DBREC extends DbRecord
{
	private $table_name;
	private $rows;
	private $cells;
	private $javascript;
	private $ie;
	private $mozilla;
	private $classname;
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
			$line.=$pre.$this->getTable_name();
			$pre=$delim;
			$line.=$pre.$this->getRows();
			$pre=$delim;
			$line.=$pre.$this->getCells();
			$pre=$delim;
			$line.=$pre.$this->getJavascript();
			$pre=$delim;
			$line.=$pre.$this->getIe();
			$pre=$delim;
			$line.=$pre.$this->getMozilla();
			$pre=$delim;
			$line.=$pre.$this->getClassname();
			$pre=$delim;
	}
	public function getTable_name()
	{
		return $this->table_name;
	}
	public function getRows()
	{
		return $this->rows;
	}
	public function getCells()
	{
		return $this->cells;
	}
	public function getJavascript()
	{
		return $this->javascript;
	}
	public function getIe()
	{
		return $this->ie;
	}
	public function getMozilla()
	{
		return $this->mozilla;
	}
	public function getClassname()
	{
		return $this->classname;
	}
	public function setTable_name($data)
	{
		$this->table_name=$data;
	}
	public function setRows($data)
	{
		$this->rows=$data;
	}
	public function setCells($data)
	{
		$this->cells=$data;
	}
	public function setJavascript($data)
	{
		$this->javascript=$data;
	}
	public function setIe($data)
	{
		$this->ie=$data;
	}
	public function setMozilla($data)
	{
		$this->mozilla=$data;
	}
	public function setClassname($data)
	{
		$this->classname=$data;
	}
}



?>
