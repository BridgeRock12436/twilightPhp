<?php







class link_DBREC extends DbRecord
{
	private $date_added;
	private $description;
	private $class;
	private $charset;
	private $href;
	private $hreflang;
	private $media;
	private $rel;
	private $rev;
	private $type;
	private $display;
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
			$line.=$pre.$this->getClass();
			$pre=$delim;
			$line.=$pre.$this->getCharset();
			$pre=$delim;
			$line.=$pre.$this->getHref();
			$pre=$delim;
			$line.=$pre.$this->getHreflang();
			$pre=$delim;
			$line.=$pre.$this->getMedia();
			$pre=$delim;
			$line.=$pre.$this->getRel();
			$pre=$delim;
			$line.=$pre.$this->getRev();
			$pre=$delim;
			$line.=$pre.$this->getType();
			$pre=$delim;
			$line.=$pre.$this->getDisplay();
			$pre=$delim;
			$line.=$pre.$this->getJavascript();
			$pre=$delim;
			$line.=$pre.$this->getRecord_key();
			$pre=$delim;
			$line.=$pre.$this->getRowid();
			$pre=$delim;
		return $line;
	}
	public function getDate_added()
	{
		return $this->date_added;
	}
	public function getDescription()
	{
		return $this->description;
	}
	public function getClass()
	{
		return $this->class;
	}
	public function getCharset()
	{
		return $this->charset;
	}
	public function getHref()
	{
		return $this->href;
	}
	public function getHreflang()
	{
		return $this->hreflang;
	}
	public function getMedia()
	{
		return $this->media;
	}
	public function getRel()
	{
		return $this->rel;
	}
	public function getRev()
	{
		return $this->rev;
	}
	public function getType()
	{
		return $this->type;
	}
	public function getDisplay()
	{
		return $this->display;
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
	public function setClass($data)
	{
		$this->class=$data;
	}
	public function setCharset($data)
	{
		$this->charset=$data;
	}
	public function setHref($data)
	{
		$this->href=$data;
	}
	public function setHreflang($data)
	{
		$this->hreflang=$data;
	}
	public function setMedia($data)
	{
		$this->media=$data;
	}
	public function setRel($data)
	{
		$this->rel=$data;
	}
	public function setRev($data)
	{
		$this->rev=$data;
	}
	public function setType($data)
	{
		$this->type=$data;
	}
	public function setDisplay($data)
	{
		$this->display=$data;
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
