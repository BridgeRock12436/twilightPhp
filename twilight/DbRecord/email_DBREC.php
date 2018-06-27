<?php







class email_DBREC extends DbRecord
{
	private $Name;
	private $displayName;
	private $filePrefix;
	private $seqNo;
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
			$line.=$pre.$this->getName();
			$pre=$delim;
			$line.=$pre.$this->getDisplayName();
			$pre=$delim;
			$line.=$pre.$this->getFilePrefix();
			$pre=$delim;
			$line.=$pre.$this->getSeqNo();
			$pre=$delim;
			$line.=$pre.$this->getRowid();
			$pre=$delim;
		return $line;
	}
	public function getName()
	{
		return $this->Name;
	}
	public function getDisplayName()
	{
		return $this->displayName;
	}
	public function getFilePrefix()
	{
		return $this->filePrefix;
	}
	public function getSeqNo()
	{
		return $this->seqNo;
	}
	public function getRowid()
	{
		return $this->rowid;
	}
	public function setName($data)
	{
		$this->Name=$data;
	}
	public function setDisplayName($data)
	{
		$this->displayName=$data;
	}
	public function setFilePrefix($data)
	{
		$this->filePrefix=$data;
	}
	public function setSeqNo($data)
	{
		$this->seqNo=$data;
	}
	public function setRowid($data)
	{
		$this->rowid=$data;
	}
}



?>
