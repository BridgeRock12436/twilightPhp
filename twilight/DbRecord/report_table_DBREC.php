<?php







class report_table_DBREC extends DbRecord
{
	private $report_name;
	private $table_name;
	private $field_name;
	private $report_label;
	private $xpos;
	private $ypos;
	private $field_pos;
	private $display_length;
	private $field_type;
	private $query_display;
	private $upper_lower;
	private $LABEL_FOREGROUND_COLOR;
	private $LABEL_BACKGROUND_COLOR;
	private $TEXT_BACKGROUND_COLOR;
	private $TEXT_FOREGROUND_COLOR;
	private $LABEL_FONT;
	private $LABEL_FONT_SIZE;
	private $TEXT_FONT;
	private $TEXT_FONT_SIZE;
	private $READONLY;
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
			$line.=$pre.$this->getReport_name();
			$pre=$delim;
			$line.=$pre.$this->getTable_name();
			$pre=$delim;
			$line.=$pre.$this->getField_name();
			$pre=$delim;
			$line.=$pre.$this->getReport_label();
			$pre=$delim;
			$line.=$pre.$this->getXpos();
			$pre=$delim;
			$line.=$pre.$this->getYpos();
			$pre=$delim;
			$line.=$pre.$this->getField_pos();
			$pre=$delim;
			$line.=$pre.$this->getDisplay_length();
			$pre=$delim;
			$line.=$pre.$this->getField_type();
			$pre=$delim;
			$line.=$pre.$this->getQuery_display();
			$pre=$delim;
			$line.=$pre.$this->getUpper_lower();
			$pre=$delim;
			$line.=$pre.$this->getLABEL_FOREGROUND_COLOR();
			$pre=$delim;
			$line.=$pre.$this->getLABEL_BACKGROUND_COLOR();
			$pre=$delim;
			$line.=$pre.$this->getTEXT_BACKGROUND_COLOR();
			$pre=$delim;
			$line.=$pre.$this->getTEXT_FOREGROUND_COLOR();
			$pre=$delim;
			$line.=$pre.$this->getLABEL_FONT();
			$pre=$delim;
			$line.=$pre.$this->getLABEL_FONT_SIZE();
			$pre=$delim;
			$line.=$pre.$this->getTEXT_FONT();
			$pre=$delim;
			$line.=$pre.$this->getTEXT_FONT_SIZE();
			$pre=$delim;
			$line.=$pre.$this->getREADONLY();
			$pre=$delim;
	}
	public function getReport_name()
	{
		return $this->report_name;
	}
	public function getTable_name()
	{
		return $this->table_name;
	}
	public function getField_name()
	{
		return $this->field_name;
	}
	public function getReport_label()
	{
		return $this->report_label;
	}
	public function getXpos()
	{
		return $this->xpos;
	}
	public function getYpos()
	{
		return $this->ypos;
	}
	public function getField_pos()
	{
		return $this->field_pos;
	}
	public function getDisplay_length()
	{
		return $this->display_length;
	}
	public function getField_type()
	{
		return $this->field_type;
	}
	public function getQuery_display()
	{
		return $this->query_display;
	}
	public function getUpper_lower()
	{
		return $this->upper_lower;
	}
	public function getLABEL_FOREGROUND_COLOR()
	{
		return $this->LABEL_FOREGROUND_COLOR;
	}
	public function getLABEL_BACKGROUND_COLOR()
	{
		return $this->LABEL_BACKGROUND_COLOR;
	}
	public function getTEXT_BACKGROUND_COLOR()
	{
		return $this->TEXT_BACKGROUND_COLOR;
	}
	public function getTEXT_FOREGROUND_COLOR()
	{
		return $this->TEXT_FOREGROUND_COLOR;
	}
	public function getLABEL_FONT()
	{
		return $this->LABEL_FONT;
	}
	public function getLABEL_FONT_SIZE()
	{
		return $this->LABEL_FONT_SIZE;
	}
	public function getTEXT_FONT()
	{
		return $this->TEXT_FONT;
	}
	public function getTEXT_FONT_SIZE()
	{
		return $this->TEXT_FONT_SIZE;
	}
	public function getREADONLY()
	{
		return $this->READONLY;
	}
	public function setReport_name($data)
	{
		$this->report_name=$data;
	}
	public function setTable_name($data)
	{
		$this->table_name=$data;
	}
	public function setField_name($data)
	{
		$this->field_name=$data;
	}
	public function setReport_label($data)
	{
		$this->report_label=$data;
	}
	public function setXpos($data)
	{
		$this->xpos=$data;
	}
	public function setYpos($data)
	{
		$this->ypos=$data;
	}
	public function setField_pos($data)
	{
		$this->field_pos=$data;
	}
	public function setDisplay_length($data)
	{
		$this->display_length=$data;
	}
	public function setField_type($data)
	{
		$this->field_type=$data;
	}
	public function setQuery_display($data)
	{
		$this->query_display=$data;
	}
	public function setUpper_lower($data)
	{
		$this->upper_lower=$data;
	}
	public function setLABEL_FOREGROUND_COLOR($data)
	{
		$this->LABEL_FOREGROUND_COLOR=$data;
	}
	public function setLABEL_BACKGROUND_COLOR($data)
	{
		$this->LABEL_BACKGROUND_COLOR=$data;
	}
	public function setTEXT_BACKGROUND_COLOR($data)
	{
		$this->TEXT_BACKGROUND_COLOR=$data;
	}
	public function setTEXT_FOREGROUND_COLOR($data)
	{
		$this->TEXT_FOREGROUND_COLOR=$data;
	}
	public function setLABEL_FONT($data)
	{
		$this->LABEL_FONT=$data;
	}
	public function setLABEL_FONT_SIZE($data)
	{
		$this->LABEL_FONT_SIZE=$data;
	}
	public function setTEXT_FONT($data)
	{
		$this->TEXT_FONT=$data;
	}
	public function setTEXT_FONT_SIZE($data)
	{
		$this->TEXT_FONT_SIZE=$data;
	}
	public function setREADONLY($data)
	{
		$this->READONLY=$data;
	}
}



?>
