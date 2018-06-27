<?php







class report_main_table_DBREC extends DbRecord
{
	private $report_name;
	private $base_tables;
	private $where_clause;
	private $order_clause;
	private $xpos;
	private $ypos;
	private $size;
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
			$line.=$pre.$this->getBase_tables();
			$pre=$delim;
			$line.=$pre.$this->getWhere_clause();
			$pre=$delim;
			$line.=$pre.$this->getOrder_clause();
			$pre=$delim;
			$line.=$pre.$this->getXpos();
			$pre=$delim;
			$line.=$pre.$this->getYpos();
			$pre=$delim;
			$line.=$pre.$this->getSize();
			$pre=$delim;
		return $line;
	}
	public function getReport_name()
	{
		return $this->report_name;
	}
	public function getBase_tables()
	{
		return $this->base_tables;
	}
	public function getWhere_clause()
	{
		return $this->where_clause;
	}
	public function getOrder_clause()
	{
		return $this->order_clause;
	}
	public function getXpos()
	{
		return $this->xpos;
	}
	public function getYpos()
	{
		return $this->ypos;
	}
	public function getSize()
	{
		return $this->size;
	}
	public function setReport_name($data)
	{
		$this->report_name=$data;
	}
	public function setBase_tables($data)
	{
		$this->base_tables=$data;
	}
	public function setWhere_clause($data)
	{
		$this->where_clause=$data;
	}
	public function setOrder_clause($data)
	{
		$this->order_clause=$data;
	}
	public function setXpos($data)
	{
		$this->xpos=$data;
	}
	public function setYpos($data)
	{
		$this->ypos=$data;
	}
	public function setSize($data)
	{
		$this->size=$data;
	}
}



?>
