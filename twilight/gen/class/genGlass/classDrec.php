<?php


class classDrec
{
    private $varName;
    private $constructFlag;
    public function __construct($row)
    {
		$arr=explode("\n",$row);
		$arr=explode("\t",$arr[0]);
		$this->setVarName($arr[0]);
		$this->setConstructFlag($arr[1]);
	 
    }
    function __destruct()
    {}
    public function isConstruct()
    {
    	$r=$this->getConstructFlag();
    	echo $r."\n";
    	if(strcasecmp($r,"Y")==0) return true;
    	return false;
    }
    /**
     * @return mixed
     */
    public function getUvarName()
    {
    	$ret=ucfirst($this->getVarName());
    	return $ret;
    }
    public function getArgVarName()
    {
    	$ret="\$arg".$this->getUvarName();
    	return $ret;
    }
    
    public function getVarName()
    {
        return $this->varName;
    }

    /**
     * @return mixed
     */
    public function getConstructFlag()
    {
        return $this->constructFlag;
    }

    /**
     * @return mixed
     */
    public function setVarName($data)
    {
        $this->varName = $data;
    }

    /**
     * @param mixed $next
     */
    public function setConstructFlag($next)
    {
        $this->constructFlag = $next;
    }


}

