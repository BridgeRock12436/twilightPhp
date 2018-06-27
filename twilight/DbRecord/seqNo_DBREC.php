<?php







class seqNo_DBREC extends DbRecord
{
	private $seqName;
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
			$line.=$pre.$this->getSeqName();
			$pre=$delim;
			$line.=$pre.$this->getSeqNo();
			$pre=$delim;
			$line.=$pre.$this->getRowid();
			$pre=$delim;
		return $line;
	}
	public function getSeqName()
	{
		return $this->seqName;
	}
	public function getSeqNo()
	{
		return $this->seqNo;
	}
	public function getRowid()
	{
		return $this->rowid;
	}
	public function setSeqName($data)
	{
		$this->seqName=$data;
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
