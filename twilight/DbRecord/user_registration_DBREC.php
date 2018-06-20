<?php







class user_registration_DBREC extends DbRecord
{
	private $userid;
	private $first_name;
	private $last_name;
	private $contact;
	private $email_address;
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
			$line.=$pre.$this->getUserid();
			$pre=$delim;
			$line.=$pre.$this->getFirst_name();
			$pre=$delim;
			$line.=$pre.$this->getLast_name();
			$pre=$delim;
			$line.=$pre.$this->getContact();
			$pre=$delim;
			$line.=$pre.$this->getEmail_address();
			$pre=$delim;
			$line.=$pre.$this->getActive();
			$pre=$delim;
			$line.=$pre.$this->getRowid();
			$pre=$delim;
	}
	public function getUserid()
	{
		return $this->userid;
	}
	public function getFirst_name()
	{
		return $this->first_name;
	}
	public function getLast_name()
	{
		return $this->last_name;
	}
	public function getContact()
	{
		return $this->contact;
	}
	public function getEmail_address()
	{
		return $this->email_address;
	}
	public function getActive()
	{
		return $this->active;
	}
	public function getRowid()
	{
		return $this->rowid;
	}
	public function setUserid($data)
	{
		$this->userid=$data;
	}
	public function setFirst_name($data)
	{
		$this->first_name=$data;
	}
	public function setLast_name($data)
	{
		$this->last_name=$data;
	}
	public function setContact($data)
	{
		$this->contact=$data;
	}
	public function setEmail_address($data)
	{
		$this->email_address=$data;
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
