<?php







class mail_individual_DBREC extends DbRecord
{
	private $rowid;
	private $toAddress;
	private $subj;
	private $text;
	private $status;
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
			$line.=$pre.$this->getRowid();
			$pre=$delim;
			$line.=$pre.$this->getToAddress();
			$pre=$delim;
			$line.=$pre.$this->getSubj();
			$pre=$delim;
			$line.=$pre.$this->getText();
			$pre=$delim;
			$line.=$pre.$this->getStatus();
			$pre=$delim;
		return $line;
	}
	public function getRowid()
	{
		return $this->rowid;
	}
	public function getToAddress()
	{
		return $this->toAddress;
	}
	public function getSubj()
	{
		return $this->subj;
	}
	public function getText()
	{
		return $this->text;
	}
	public function getStatus()
	{
		return $this->status;
	}
	public function setRowid($data)
	{
		$this->rowid=$data;
	}
	public function setToAddress($data)
	{
		$this->toAddress=$data;
	}
	public function setSubj($data)
	{
		$this->subj=$data;
	}
	public function setText($data)
	{
		$this->text=$data;
	}
	public function setStatus($data)
	{
		$this->status=$data;
	}
}



?>
