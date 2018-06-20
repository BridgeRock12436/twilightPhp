<?php







class emailAtt_DBREC extends DbRecord
{
	private $processId;
	private $FileName;
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
			$line.=$pre.$this->getProcessId();
			$pre=$delim;
			$line.=$pre.$this->getFileName();
			$pre=$delim;
			$line.=$pre.$this->getRowid();
			$pre=$delim;
	}
	public function getProcessId()
	{
		return $this->processId;
	}
	public function getFileName()
	{
		return $this->FileName;
	}
	public function getRowid()
	{
		return $this->rowid;
	}
	public function setProcessId($data)
	{
		$this->processId=$data;
	}
	public function setFileName($data)
	{
		$this->FileName=$data;
	}
	public function setRowid($data)
	{
		$this->rowid=$data;
	}
}



?>
