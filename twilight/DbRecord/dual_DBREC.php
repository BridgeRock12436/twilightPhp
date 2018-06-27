<?php







class dual_DBREC extends DbRecord
{
	private $f1;
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
			$line.=$pre.$this->getF1();
			$pre=$delim;
		return $line;
	}
	public function getF1()
	{
		return $this->f1;
	}
	public function setF1($data)
	{
		$this->f1=$data;
	}
}



?>
