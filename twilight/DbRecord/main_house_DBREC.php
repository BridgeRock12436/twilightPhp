<?php







class main_house_DBREC extends DbRecord
{
	private $main_house_number;
	private $addr1;
	private $addr2;
	private $city;
	private $state;
	private $country;
	private $zip;
	private $phone_number;
	private $alt_phone_number;
	private $international;
	private $ilabel1;
	private $ilabel2;
	private $ilabel3;
	private $ilabel4;
	private $ilabel5;
	private $idata1;
	private $idata2;
	private $idata3;
	private $idata4;
	private $idata5;
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
			$line.=$pre.$this->getMain_house_number();
			$pre=$delim;
			$line.=$pre.$this->getAddr1();
			$pre=$delim;
			$line.=$pre.$this->getAddr2();
			$pre=$delim;
			$line.=$pre.$this->getCity();
			$pre=$delim;
			$line.=$pre.$this->getState();
			$pre=$delim;
			$line.=$pre.$this->getCountry();
			$pre=$delim;
			$line.=$pre.$this->getZip();
			$pre=$delim;
			$line.=$pre.$this->getPhone_number();
			$pre=$delim;
			$line.=$pre.$this->getAlt_phone_number();
			$pre=$delim;
			$line.=$pre.$this->getInternational();
			$pre=$delim;
			$line.=$pre.$this->getIlabel1();
			$pre=$delim;
			$line.=$pre.$this->getIlabel2();
			$pre=$delim;
			$line.=$pre.$this->getIlabel3();
			$pre=$delim;
			$line.=$pre.$this->getIlabel4();
			$pre=$delim;
			$line.=$pre.$this->getIlabel5();
			$pre=$delim;
			$line.=$pre.$this->getIdata1();
			$pre=$delim;
			$line.=$pre.$this->getIdata2();
			$pre=$delim;
			$line.=$pre.$this->getIdata3();
			$pre=$delim;
			$line.=$pre.$this->getIdata4();
			$pre=$delim;
			$line.=$pre.$this->getIdata5();
			$pre=$delim;
	}
	public function getMain_house_number()
	{
		return $this->main_house_number;
	}
	public function getAddr1()
	{
		return $this->addr1;
	}
	public function getAddr2()
	{
		return $this->addr2;
	}
	public function getCity()
	{
		return $this->city;
	}
	public function getState()
	{
		return $this->state;
	}
	public function getCountry()
	{
		return $this->country;
	}
	public function getZip()
	{
		return $this->zip;
	}
	public function getPhone_number()
	{
		return $this->phone_number;
	}
	public function getAlt_phone_number()
	{
		return $this->alt_phone_number;
	}
	public function getInternational()
	{
		return $this->international;
	}
	public function getIlabel1()
	{
		return $this->ilabel1;
	}
	public function getIlabel2()
	{
		return $this->ilabel2;
	}
	public function getIlabel3()
	{
		return $this->ilabel3;
	}
	public function getIlabel4()
	{
		return $this->ilabel4;
	}
	public function getIlabel5()
	{
		return $this->ilabel5;
	}
	public function getIdata1()
	{
		return $this->idata1;
	}
	public function getIdata2()
	{
		return $this->idata2;
	}
	public function getIdata3()
	{
		return $this->idata3;
	}
	public function getIdata4()
	{
		return $this->idata4;
	}
	public function getIdata5()
	{
		return $this->idata5;
	}
	public function setMain_house_number($data)
	{
		$this->main_house_number=$data;
	}
	public function setAddr1($data)
	{
		$this->addr1=$data;
	}
	public function setAddr2($data)
	{
		$this->addr2=$data;
	}
	public function setCity($data)
	{
		$this->city=$data;
	}
	public function setState($data)
	{
		$this->state=$data;
	}
	public function setCountry($data)
	{
		$this->country=$data;
	}
	public function setZip($data)
	{
		$this->zip=$data;
	}
	public function setPhone_number($data)
	{
		$this->phone_number=$data;
	}
	public function setAlt_phone_number($data)
	{
		$this->alt_phone_number=$data;
	}
	public function setInternational($data)
	{
		$this->international=$data;
	}
	public function setIlabel1($data)
	{
		$this->ilabel1=$data;
	}
	public function setIlabel2($data)
	{
		$this->ilabel2=$data;
	}
	public function setIlabel3($data)
	{
		$this->ilabel3=$data;
	}
	public function setIlabel4($data)
	{
		$this->ilabel4=$data;
	}
	public function setIlabel5($data)
	{
		$this->ilabel5=$data;
	}
	public function setIdata1($data)
	{
		$this->idata1=$data;
	}
	public function setIdata2($data)
	{
		$this->idata2=$data;
	}
	public function setIdata3($data)
	{
		$this->idata3=$data;
	}
	public function setIdata4($data)
	{
		$this->idata4=$data;
	}
	public function setIdata5($data)
	{
		$this->idata5=$data;
	}
}



?>
