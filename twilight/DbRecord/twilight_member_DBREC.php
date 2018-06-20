<?php







class twilight_member_DBREC extends DbRecord
{
	private $family_number;
	private $family_generation;
	private $family_type;
	private $root;
	private $first_name;
	private $last_name;
	private $suffix;
	private $main_house_number;
	private $cottage_number;
	private $email_address;
	private $subscribe;
	private $birthdate;
	private $work_phone;
	private $cell_phone;
	private $blood_relative;
	private $park_relation;
	private $park_relation_2;
	private $wj_rpt;
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
			$line.=$pre.$this->getFirst_name();
			$pre=$delim;
			$line.=$pre.$this->getLast_name();
			$pre=$delim;
			$line.=$pre.$this->getSuffix();
			$pre=$delim;
			$line.=$pre.$this->getMain_house_number();
			$pre=$delim;
			$line.=$pre.$this->getCottage_number();
			$pre=$delim;
			$line.=$pre.$this->getEmail_address();
			$pre=$delim;
			$line.=$pre.$this->getSubscribe();
			$pre=$delim;
			$line.=$pre.$this->getBirthdate();
			$pre=$delim;
			$line.=$pre.$this->getWork_phone();
			$pre=$delim;
			$line.=$pre.$this->getCell_phone();
			$pre=$delim;
			$line.=$pre.$this->getBlood_relative();
			$pre=$delim;
			$line.=$pre.$this->getPark_relation();
			$pre=$delim;
			$line.=$pre.$this->getPark_relation_2();
			$pre=$delim;
			$line.=$pre.$this->getWj_rpt();
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
	public function getFirst_name()
	{
		return $this->first_name;
	}
	public function getLast_name()
	{
		return $this->last_name;
	}
	public function getSuffix()
	{
		return $this->suffix;
	}
	public function getMain_house_number()
	{
		return $this->main_house_number;
	}
	public function getCottage_number()
	{
		return $this->cottage_number;
	}
	public function getEmail_address()
	{
		return $this->email_address;
	}
	public function getSubscribe()
	{
		return $this->subscribe;
	}
	public function getBirthdate()
	{
		return $this->birthdate;
	}
	public function getWork_phone()
	{
		return $this->work_phone;
	}
	public function getCell_phone()
	{
		return $this->cell_phone;
	}
	public function getBlood_relative()
	{
		return $this->blood_relative;
	}
	public function getPark_relation()
	{
		return $this->park_relation;
	}
	public function getPark_relation_2()
	{
		return $this->park_relation_2;
	}
	public function getWj_rpt()
	{
		return $this->wj_rpt;
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
	public function setFirst_name($data)
	{
		$this->first_name=$data;
	}
	public function setLast_name($data)
	{
		$this->last_name=$data;
	}
	public function setSuffix($data)
	{
		$this->suffix=$data;
	}
	public function setMain_house_number($data)
	{
		$this->main_house_number=$data;
	}
	public function setCottage_number($data)
	{
		$this->cottage_number=$data;
	}
	public function setEmail_address($data)
	{
		$this->email_address=$data;
	}
	public function setSubscribe($data)
	{
		$this->subscribe=$data;
	}
	public function setBirthdate($data)
	{
		$this->birthdate=$data;
	}
	public function setWork_phone($data)
	{
		$this->work_phone=$data;
	}
	public function setCell_phone($data)
	{
		$this->cell_phone=$data;
	}
	public function setBlood_relative($data)
	{
		$this->blood_relative=$data;
	}
	public function setPark_relation($data)
	{
		$this->park_relation=$data;
	}
	public function setPark_relation_2($data)
	{
		$this->park_relation_2=$data;
	}
	public function setWj_rpt($data)
	{
		$this->wj_rpt=$data;
	}
}



?>
