<?php







class emailProcess_DBREC extends DbRecord
{
	private $name;
	private $board;
	private $HTTP_HOST;
	private $subjectFile;
	private $respFile;
	private $mailFile;
	private $attFile;
	private $processed;
	private $processID;
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
			$line.=$pre.$this->getBoard();
			$pre=$delim;
			$line.=$pre.$this->getHTTP_HOST();
			$pre=$delim;
			$line.=$pre.$this->getSubjectFile();
			$pre=$delim;
			$line.=$pre.$this->getRespFile();
			$pre=$delim;
			$line.=$pre.$this->getMailFile();
			$pre=$delim;
			$line.=$pre.$this->getAttFile();
			$pre=$delim;
			$line.=$pre.$this->getProcessed();
			$pre=$delim;
			$line.=$pre.$this->getProcessID();
			$pre=$delim;
			$line.=$pre.$this->getRowid();
			$pre=$delim;
	}
	public function getName()
	{
		return $this->name;
	}
	public function getBoard()
	{
		return $this->board;
	}
	public function getHTTP_HOST()
	{
		return $this->HTTP_HOST;
	}
	public function getSubjectFile()
	{
		return $this->subjectFile;
	}
	public function getRespFile()
	{
		return $this->respFile;
	}
	public function getMailFile()
	{
		return $this->mailFile;
	}
	public function getAttFile()
	{
		return $this->attFile;
	}
	public function getProcessed()
	{
		return $this->processed;
	}
	public function getProcessID()
	{
		return $this->processID;
	}
	public function getRowid()
	{
		return $this->rowid;
	}
	public function setName($data)
	{
		$this->name=$data;
	}
	public function setBoard($data)
	{
		$this->board=$data;
	}
	public function setHTTP_HOST($data)
	{
		$this->HTTP_HOST=$data;
	}
	public function setSubjectFile($data)
	{
		$this->subjectFile=$data;
	}
	public function setRespFile($data)
	{
		$this->respFile=$data;
	}
	public function setMailFile($data)
	{
		$this->mailFile=$data;
	}
	public function setAttFile($data)
	{
		$this->attFile=$data;
	}
	public function setProcessed($data)
	{
		$this->processed=$data;
	}
	public function setProcessID($data)
	{
		$this->processID=$data;
	}
	public function setRowid($data)
	{
		$this->rowid=$data;
	}
}



?>
