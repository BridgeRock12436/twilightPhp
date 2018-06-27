<?php







class htmlcolgroupcell_DBREC extends DbRecord
{
	private $table_name;
	private $colgroup;
	private $col;
	private $pos;
	private $classname;
	private $align;
	private $c_char;
	private $charoff;
	private $valign;
	private $span;
	private $width;
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
			$line.=$pre.$this->getTable_name();
			$pre=$delim;
			$line.=$pre.$this->getColgroup();
			$pre=$delim;
			$line.=$pre.$this->getCol();
			$pre=$delim;
			$line.=$pre.$this->getPos();
			$pre=$delim;
			$line.=$pre.$this->getClassname();
			$pre=$delim;
			$line.=$pre.$this->getAlign();
			$pre=$delim;
			$line.=$pre.$this->getC_char();
			$pre=$delim;
			$line.=$pre.$this->getCharoff();
			$pre=$delim;
			$line.=$pre.$this->getValign();
			$pre=$delim;
			$line.=$pre.$this->getSpan();
			$pre=$delim;
			$line.=$pre.$this->getWidth();
			$pre=$delim;
		return $line;
	}
	public function getTable_name()
	{
		return $this->table_name;
	}
	public function getColgroup()
	{
		return $this->colgroup;
	}
	public function getCol()
	{
		return $this->col;
	}
	public function getPos()
	{
		return $this->pos;
	}
	public function getClassname()
	{
		return $this->classname;
	}
	public function getAlign()
	{
		return $this->align;
	}
	public function getC_char()
	{
		return $this->c_char;
	}
	public function getCharoff()
	{
		return $this->charoff;
	}
	public function getValign()
	{
		return $this->valign;
	}
	public function getSpan()
	{
		return $this->span;
	}
	public function getWidth()
	{
		return $this->width;
	}
	public function setTable_name($data)
	{
		$this->table_name=$data;
	}
	public function setColgroup($data)
	{
		$this->colgroup=$data;
	}
	public function setCol($data)
	{
		$this->col=$data;
	}
	public function setPos($data)
	{
		$this->pos=$data;
	}
	public function setClassname($data)
	{
		$this->classname=$data;
	}
	public function setAlign($data)
	{
		$this->align=$data;
	}
	public function setC_char($data)
	{
		$this->c_char=$data;
	}
	public function setCharoff($data)
	{
		$this->charoff=$data;
	}
	public function setValign($data)
	{
		$this->valign=$data;
	}
	public function setSpan($data)
	{
		$this->span=$data;
	}
	public function setWidth($data)
	{
		$this->width=$data;
	}
}



?>
