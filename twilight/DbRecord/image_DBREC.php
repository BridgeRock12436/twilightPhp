<?php







class image_DBREC extends DbRecord
{
	private $date_added;
	private $description;
	private $alt;
	private $src;
	private $align;
	private $height;
	private $width;
	private $ismap;
	private $longdesc;
	private $usemap;
	private $javascript;
	private $record_key;
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
			$line.=$pre.$this->getDate_added();
			$pre=$delim;
			$line.=$pre.$this->getDescription();
			$pre=$delim;
			$line.=$pre.$this->getAlt();
			$pre=$delim;
			$line.=$pre.$this->getSrc();
			$pre=$delim;
			$line.=$pre.$this->getAlign();
			$pre=$delim;
			$line.=$pre.$this->getHeight();
			$pre=$delim;
			$line.=$pre.$this->getWidth();
			$pre=$delim;
			$line.=$pre.$this->getIsmap();
			$pre=$delim;
			$line.=$pre.$this->getLongdesc();
			$pre=$delim;
			$line.=$pre.$this->getUsemap();
			$pre=$delim;
			$line.=$pre.$this->getJavascript();
			$pre=$delim;
			$line.=$pre.$this->getRecord_key();
			$pre=$delim;
			$line.=$pre.$this->getRowid();
			$pre=$delim;
	}
	public function getDate_added()
	{
		return $this->date_added;
	}
	public function getDescription()
	{
		return $this->description;
	}
	public function getAlt()
	{
		return $this->alt;
	}
	public function getSrc()
	{
		return $this->src;
	}
	public function getAlign()
	{
		return $this->align;
	}
	public function getHeight()
	{
		return $this->height;
	}
	public function getWidth()
	{
		return $this->width;
	}
	public function getIsmap()
	{
		return $this->ismap;
	}
	public function getLongdesc()
	{
		return $this->longdesc;
	}
	public function getUsemap()
	{
		return $this->usemap;
	}
	public function getJavascript()
	{
		return $this->javascript;
	}
	public function getRecord_key()
	{
		return $this->record_key;
	}
	public function getRowid()
	{
		return $this->rowid;
	}
	public function setDate_added($data)
	{
		$this->date_added=$data;
	}
	public function setDescription($data)
	{
		$this->description=$data;
	}
	public function setAlt($data)
	{
		$this->alt=$data;
	}
	public function setSrc($data)
	{
		$this->src=$data;
	}
	public function setAlign($data)
	{
		$this->align=$data;
	}
	public function setHeight($data)
	{
		$this->height=$data;
	}
	public function setWidth($data)
	{
		$this->width=$data;
	}
	public function setIsmap($data)
	{
		$this->ismap=$data;
	}
	public function setLongdesc($data)
	{
		$this->longdesc=$data;
	}
	public function setUsemap($data)
	{
		$this->usemap=$data;
	}
	public function setJavascript($data)
	{
		$this->javascript=$data;
	}
	public function setRecord_key($data)
	{
		$this->record_key=$data;
	}
	public function setRowid($data)
	{
		$this->rowid=$data;
	}
}



?>
