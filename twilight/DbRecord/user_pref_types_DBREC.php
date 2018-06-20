<?php







class user_pref_types_DBREC extends DbRecord
{
	private $pref_type;
	private $pref_value;
	private $pref_desc;
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
			$line.=$pre.$this->getPref_type();
			$pre=$delim;
			$line.=$pre.$this->getPref_value();
			$pre=$delim;
			$line.=$pre.$this->getPref_desc();
			$pre=$delim;
			$line.=$pre.$this->getSortKey();
			$pre=$delim;
			$line.=$pre.$this->getRowid();
			$pre=$delim;
	}
	public function getPref_type()
	{
		return $this->pref_type;
	}
	public function getPref_value()
	{
		return $this->pref_value;
	}
	public function getPref_desc()
	{
		return $this->pref_desc;
	}
	public function getSortKey()
	{
		return $this->sortKey;
	}
	public function getRowid()
	{
		return $this->rowid;
	}
	public function setPref_type($data)
	{
		$this->pref_type=$data;
	}
	public function setPref_value($data)
	{
		$this->pref_value=$data;
	}
	public function setPref_desc($data)
	{
		$this->pref_desc=$data;
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
