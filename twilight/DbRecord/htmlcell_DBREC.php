<?php







class htmlcell_DBREC extends DbRecord
{
	private $table_name;
	private $field_name;
	private $field_value;
	private $where_condition;
	private $field_display;
	private $field_type;
	private $row_pos;
	private $col_pos;
	private $display_length;
	private $field_length;
	private $required;
	private $classname;
	private $align;
	private $valign;
	private $c_char;
	private $charoff;
	private $colspan;
	private $rowspan;
	private $on_change;
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
			$line.=$pre.$this->getField_name();
			$pre=$delim;
			$line.=$pre.$this->getField_value();
			$pre=$delim;
			$line.=$pre.$this->getWhere_condition();
			$pre=$delim;
			$line.=$pre.$this->getField_display();
			$pre=$delim;
			$line.=$pre.$this->getField_type();
			$pre=$delim;
			$line.=$pre.$this->getRow_pos();
			$pre=$delim;
			$line.=$pre.$this->getCol_pos();
			$pre=$delim;
			$line.=$pre.$this->getDisplay_length();
			$pre=$delim;
			$line.=$pre.$this->getField_length();
			$pre=$delim;
			$line.=$pre.$this->getRequired();
			$pre=$delim;
			$line.=$pre.$this->getClassname();
			$pre=$delim;
			$line.=$pre.$this->getAlign();
			$pre=$delim;
			$line.=$pre.$this->getValign();
			$pre=$delim;
			$line.=$pre.$this->getC_char();
			$pre=$delim;
			$line.=$pre.$this->getCharoff();
			$pre=$delim;
			$line.=$pre.$this->getColspan();
			$pre=$delim;
			$line.=$pre.$this->getRowspan();
			$pre=$delim;
			$line.=$pre.$this->getOn_change();
			$pre=$delim;
		return $line;
	}
	public function getTable_name()
	{
		return $this->table_name;
	}
	public function getField_name()
	{
		return $this->field_name;
	}
	public function getField_value()
	{
		return $this->field_value;
	}
	public function getWhere_condition()
	{
		return $this->where_condition;
	}
	public function getField_display()
	{
		return $this->field_display;
	}
	public function getField_type()
	{
		return $this->field_type;
	}
	public function getRow_pos()
	{
		return $this->row_pos;
	}
	public function getCol_pos()
	{
		return $this->col_pos;
	}
	public function getDisplay_length()
	{
		return $this->display_length;
	}
	public function getField_length()
	{
		return $this->field_length;
	}
	public function getRequired()
	{
		return $this->required;
	}
	public function getClassname()
	{
		return $this->classname;
	}
	public function getAlign()
	{
		return $this->align;
	}
	public function getValign()
	{
		return $this->valign;
	}
	public function getC_char()
	{
		return $this->c_char;
	}
	public function getCharoff()
	{
		return $this->charoff;
	}
	public function getColspan()
	{
		return $this->colspan;
	}
	public function getRowspan()
	{
		return $this->rowspan;
	}
	public function getOn_change()
	{
		return $this->on_change;
	}
	public function setTable_name($data)
	{
		$this->table_name=$data;
	}
	public function setField_name($data)
	{
		$this->field_name=$data;
	}
	public function setField_value($data)
	{
		$this->field_value=$data;
	}
	public function setWhere_condition($data)
	{
		$this->where_condition=$data;
	}
	public function setField_display($data)
	{
		$this->field_display=$data;
	}
	public function setField_type($data)
	{
		$this->field_type=$data;
	}
	public function setRow_pos($data)
	{
		$this->row_pos=$data;
	}
	public function setCol_pos($data)
	{
		$this->col_pos=$data;
	}
	public function setDisplay_length($data)
	{
		$this->display_length=$data;
	}
	public function setField_length($data)
	{
		$this->field_length=$data;
	}
	public function setRequired($data)
	{
		$this->required=$data;
	}
	public function setClassname($data)
	{
		$this->classname=$data;
	}
	public function setAlign($data)
	{
		$this->align=$data;
	}
	public function setValign($data)
	{
		$this->valign=$data;
	}
	public function setC_char($data)
	{
		$this->c_char=$data;
	}
	public function setCharoff($data)
	{
		$this->charoff=$data;
	}
	public function setColspan($data)
	{
		$this->colspan=$data;
	}
	public function setRowspan($data)
	{
		$this->rowspan=$data;
	}
	public function setOn_change($data)
	{
		$this->on_change=$data;
	}
}



?>
