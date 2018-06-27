<?php







class standard_DBREC extends DbRecord
{
	private $class;
	private $description;
	private $id;
	private $style;
	private $title;
	private $dir;
	private $lang;
	private $tabindex;
	private $accesskey;
	private $standKey;
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
			$line.=$pre.$this->getClass();
			$pre=$delim;
			$line.=$pre.$this->getDescription();
			$pre=$delim;
			$line.=$pre.$this->getId();
			$pre=$delim;
			$line.=$pre.$this->getStyle();
			$pre=$delim;
			$line.=$pre.$this->getTitle();
			$pre=$delim;
			$line.=$pre.$this->getDir();
			$pre=$delim;
			$line.=$pre.$this->getLang();
			$pre=$delim;
			$line.=$pre.$this->getTabindex();
			$pre=$delim;
			$line.=$pre.$this->getAccesskey();
			$pre=$delim;
			$line.=$pre.$this->getStandKey();
			$pre=$delim;
			$line.=$pre.$this->getRowid();
			$pre=$delim;
		return $line;
	}
	public function getClass()
	{
		return $this->class;
	}
	public function getDescription()
	{
		return $this->description;
	}
	public function getId()
	{
		return $this->id;
	}
	public function getStyle()
	{
		return $this->style;
	}
	public function getTitle()
	{
		return $this->title;
	}
	public function getDir()
	{
		return $this->dir;
	}
	public function getLang()
	{
		return $this->lang;
	}
	public function getTabindex()
	{
		return $this->tabindex;
	}
	public function getAccesskey()
	{
		return $this->accesskey;
	}
	public function getStandKey()
	{
		return $this->standKey;
	}
	public function getRowid()
	{
		return $this->rowid;
	}
	public function setClass($data)
	{
		$this->class=$data;
	}
	public function setDescription($data)
	{
		$this->description=$data;
	}
	public function setId($data)
	{
		$this->id=$data;
	}
	public function setStyle($data)
	{
		$this->style=$data;
	}
	public function setTitle($data)
	{
		$this->title=$data;
	}
	public function setDir($data)
	{
		$this->dir=$data;
	}
	public function setLang($data)
	{
		$this->lang=$data;
	}
	public function setTabindex($data)
	{
		$this->tabindex=$data;
	}
	public function setAccesskey($data)
	{
		$this->accesskey=$data;
	}
	public function setStandKey($data)
	{
		$this->standKey=$data;
	}
	public function setRowid($data)
	{
		$this->rowid=$data;
	}
}



?>
