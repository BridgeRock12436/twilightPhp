<?php







class user_pref_DBREC extends DbRecord
{
	private $family_number;
	private $family_generation;
	private $family_type;
	private $root;
	private $pref_type;
	private $pref_value;
	private $active;
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
			$line.=$pre.$this->getPref_type();
			$pre=$delim;
			$line.=$pre.$this->getPref_value();
			$pre=$delim;
			$line.=$pre.$this->getActive();
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
	public function getPref_type()
	{
		return $this->pref_type;
	}
	public function getPref_value()
	{
		return $this->pref_value;
	}
	public function getActive()
	{
		return $this->active;
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
	public function setPref_type($data)
	{
		$this->pref_type=$data;
	}
	public function setPref_value($data)
	{
		$this->pref_value=$data;
	}
	public function setActive($data)
	{
		$this->active=$data;
	}
	public function setRowid($data)
	{
		$this->rowid=$data;
	}
}



?>
