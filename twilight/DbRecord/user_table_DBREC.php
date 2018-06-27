<?php







class user_table_DBREC extends DbRecord
{
	private $table_name;
	private $field_name;
	private $label;
	private $length;
	private $obj_name;
	private $data_type;
	private $prime_key;
	private $required;
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
			$line.=$pre.$this->getField_name();
			$pre=$delim;
			$line.=$pre.$this->getLabel();
			$pre=$delim;
			$line.=$pre.$this->getLength();
			$pre=$delim;
			$line.=$pre.$this->getObj_name();
			$pre=$delim;
			$line.=$pre.$this->getData_type();
			$pre=$delim;
			$line.=$pre.$this->getPrime_key();
			$pre=$delim;
			$line.=$pre.$this->getRequired();
			$pre=$delim;
		return $line;
	}
	public function getTable_name()
	{
		return $this->table_name;
	}
	public function getField_name()
	{
		return $this->field_name;
	}
	public function getLabel()
	{
		return $this->label;
	}
	public function getLength()
	{
		return $this->length;
	}
	public function getObj_name()
	{
		return $this->obj_name;
	}
	public function getData_type()
	{
		return $this->data_type;
	}
	public function getPrime_key()
	{
		return $this->prime_key;
	}
	public function getRequired()
	{
		return $this->required;
	}
	public function setTable_name($data)
	{
		$this->table_name=$data;
	}
	public function setField_name($data)
	{
		$this->field_name=$data;
	}
	public function setLabel($data)
	{
		$this->label=$data;
	}
	public function setLength($data)
	{
		$this->length=$data;
	}
	public function setObj_name($data)
	{
		$this->obj_name=$data;
	}
	public function setData_type($data)
	{
		$this->data_type=$data;
	}
	public function setPrime_key($data)
	{
		$this->prime_key=$data;
	}
	public function setRequired($data)
	{
		$this->required=$data;
	}
}



?>
