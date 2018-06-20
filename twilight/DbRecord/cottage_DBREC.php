<?php







class cottage_DBREC extends DbRecord
{
	private $cottage_number;
	private $addr;
	private $phone;
	private $alt_phone;
	private $name;
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
			$line.=$pre.$this->getCottage_number();
			$pre=$delim;
			$line.=$pre.$this->getAddr();
			$pre=$delim;
			$line.=$pre.$this->getPhone();
			$pre=$delim;
			$line.=$pre.$this->getAlt_phone();
			$pre=$delim;
			$line.=$pre.$this->getName();
			$pre=$delim;
	}
	public function getCottage_number()
	{
		return $this->cottage_number;
	}
	public function getAddr()
	{
		return $this->addr;
	}
	public function getPhone()
	{
		return $this->phone;
	}
	public function getAlt_phone()
	{
		return $this->alt_phone;
	}
	public function getName()
	{
		return $this->name;
	}
	public function setCottage_number($data)
	{
		$this->cottage_number=$data;
	}
	public function setAddr($data)
	{
		$this->addr=$data;
	}
	public function setPhone($data)
	{
		$this->phone=$data;
	}
	public function setAlt_phone($data)
	{
		$this->alt_phone=$data;
	}
	public function setName($data)
	{
		$this->name=$data;
	}
}



?>
