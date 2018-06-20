<?php







class users_DBREC extends DbRecord
{
	private $userid;
	private $expires;
	private $passwd;
	private $family_number;
	private $admin;
	private $family_generation;
	private $family_type;
	private $root;
	private $calendar_login;
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
			$line.=$pre.$this->getUserid();
			$pre=$delim;
			$line.=$pre.$this->getExpires();
			$pre=$delim;
			$line.=$pre.$this->getPasswd();
			$pre=$delim;
			$line.=$pre.$this->getFamily_number();
			$pre=$delim;
			$line.=$pre.$this->getAdmin();
			$pre=$delim;
			$line.=$pre.$this->getFamily_generation();
			$pre=$delim;
			$line.=$pre.$this->getFamily_type();
			$pre=$delim;
			$line.=$pre.$this->getRoot();
			$pre=$delim;
			$line.=$pre.$this->getCalendar_login();
			$pre=$delim;
	}
	public function getUserid()
	{
		return $this->userid;
	}
	public function getExpires()
	{
		return $this->expires;
	}
	public function getPasswd()
	{
		return $this->passwd;
	}
	public function getFamily_number()
	{
		return $this->family_number;
	}
	public function getAdmin()
	{
		return $this->admin;
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
	public function getCalendar_login()
	{
		return $this->calendar_login;
	}
	public function setUserid($data)
	{
		$this->userid=$data;
	}
	public function setExpires($data)
	{
		$this->expires=$data;
	}
	public function setPasswd($data)
	{
		$this->passwd=$data;
	}
	public function setFamily_number($data)
	{
		$this->family_number=$data;
	}
	public function setAdmin($data)
	{
		$this->admin=$data;
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
	public function setCalendar_login($data)
	{
		$this->calendar_login=$data;
	}
}



?>
