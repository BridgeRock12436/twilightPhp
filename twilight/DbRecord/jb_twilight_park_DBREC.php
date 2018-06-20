<?php







class jb_twilight_park_DBREC extends DbRecord
{
	private $col_type;
	private $date_added;
	private $line_no;
	private $col;
	private $description;
	private $type;
	private $record_key;
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
			$line.=$pre.$this->getCol_type();
			$pre=$delim;
			$line.=$pre.$this->getDate_added();
			$pre=$delim;
			$line.=$pre.$this->getLine_no();
			$pre=$delim;
			$line.=$pre.$this->getCol();
			$pre=$delim;
			$line.=$pre.$this->getDescription();
			$pre=$delim;
			$line.=$pre.$this->getType();
			$pre=$delim;
			$line.=$pre.$this->getRecord_key();
			$pre=$delim;
			$line.=$pre.$this->getRowid();
			$pre=$delim;
	}
	public function getCol_type()
	{
		return $this->col_type;
	}
	public function getDate_added()
	{
		return $this->date_added;
	}
	public function getLine_no()
	{
		return $this->line_no;
	}
	public function getCol()
	{
		return $this->col;
	}
	public function getDescription()
	{
		return $this->description;
	}
	public function getType()
	{
		return $this->type;
	}
	public function getRecord_key()
	{
		return $this->record_key;
	}
	public function getRowid()
	{
		return $this->rowid;
	}
	public function setCol_type($data)
	{
		$this->col_type=$data;
	}
	public function setDate_added($data)
	{
		$this->date_added=$data;
	}
	public function setLine_no($data)
	{
		$this->line_no=$data;
	}
	public function setCol($data)
	{
		$this->col=$data;
	}
	public function setDescription($data)
	{
		$this->description=$data;
	}
	public function setType($data)
	{
		$this->type=$data;
	}
	public function setRecord_key($data)
	{
		$this->record_key=$data;
	}
	public function setRowid($data)
	{
		$this->rowid=$data;
	}
}



?>
