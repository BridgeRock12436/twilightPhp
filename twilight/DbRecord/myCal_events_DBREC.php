<?php







class myCal_events_DBREC extends DbRecord
{
	private $eventId;
	private $user;
	private $catagory;
	private $eventDate;
	private $startTime;
	private $endTime;
	private $eventShortDesc;
	private $eventDesc;
	private $fileName;
	private $fileType;
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
			$line.=$pre.$this->getEventId();
			$pre=$delim;
			$line.=$pre.$this->getUser();
			$pre=$delim;
			$line.=$pre.$this->getCatagory();
			$pre=$delim;
			$line.=$pre.$this->getEventDate();
			$pre=$delim;
			$line.=$pre.$this->getStartTime();
			$pre=$delim;
			$line.=$pre.$this->getEndTime();
			$pre=$delim;
			$line.=$pre.$this->getEventShortDesc();
			$pre=$delim;
			$line.=$pre.$this->getEventDesc();
			$pre=$delim;
			$line.=$pre.$this->getFileName();
			$pre=$delim;
			$line.=$pre.$this->getFileType();
			$pre=$delim;
			$line.=$pre.$this->getRowid();
			$pre=$delim;
	}
	public function getEventId()
	{
		return $this->eventId;
	}
	public function getUser()
	{
		return $this->user;
	}
	public function getCatagory()
	{
		return $this->catagory;
	}
	public function getEventDate()
	{
		return $this->eventDate;
	}
	public function getStartTime()
	{
		return $this->startTime;
	}
	public function getEndTime()
	{
		return $this->endTime;
	}
	public function getEventShortDesc()
	{
		return $this->eventShortDesc;
	}
	public function getEventDesc()
	{
		return $this->eventDesc;
	}
	public function getFileName()
	{
		return $this->fileName;
	}
	public function getFileType()
	{
		return $this->fileType;
	}
	public function getRowid()
	{
		return $this->rowid;
	}
	public function setEventId($data)
	{
		$this->eventId=$data;
	}
	public function setUser($data)
	{
		$this->user=$data;
	}
	public function setCatagory($data)
	{
		$this->catagory=$data;
	}
	public function setEventDate($data)
	{
		$this->eventDate=$data;
	}
	public function setStartTime($data)
	{
		$this->startTime=$data;
	}
	public function setEndTime($data)
	{
		$this->endTime=$data;
	}
	public function setEventShortDesc($data)
	{
		$this->eventShortDesc=$data;
	}
	public function setEventDesc($data)
	{
		$this->eventDesc=$data;
	}
	public function setFileName($data)
	{
		$this->fileName=$data;
	}
	public function setFileType($data)
	{
		$this->fileType=$data;
	}
	public function setRowid($data)
	{
		$this->rowid=$data;
	}
}



?>
