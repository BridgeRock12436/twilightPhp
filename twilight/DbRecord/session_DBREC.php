<?php







class session_DBREC extends DbRecord
{
	private $userid;
	private $session_key;
	private $admin;
	private $start_time;
	private $family_number;
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
			$line.=$pre.$this->getSession_key();
			$pre=$delim;
			$line.=$pre.$this->getAdmin();
			$pre=$delim;
			$line.=$pre.$this->getStart_time();
			$pre=$delim;
			$line.=$pre.$this->getFamily_number();
			$pre=$delim;
		return $line;
	}
	public function getUserid()
	{
		return $this->userid;
	}
	public function getSession_key()
	{
		return $this->session_key;
	}
	public function getAdmin()
	{
		return $this->admin;
	}
	public function getStart_time()
	{
		return $this->start_time;
	}
	public function getFamily_number()
	{
		return $this->family_number;
	}
	public function setUserid($data)
	{
		$this->userid=$data;
	}
	public function setSession_key($data)
	{
		$this->session_key=$data;
	}
	public function setAdmin($data)
	{
		$this->admin=$data;
	}
	public function setStart_time($data)
	{
		$this->start_time=$data;
	}
	public function setFamily_number($data)
	{
		$this->family_number=$data;
	}
}



?>
