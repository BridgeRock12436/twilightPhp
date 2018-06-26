<?php
require_once 'dbInc.php';


class DbRecord
{
    private $colObjArray;
    private $nullArray;
    
    public function __set($name, $value) {}
    public function __construct()
    {
        $this->setNullArray(array());
        $this->initData();
        
    }

    function __destruct()
    {}
    public function initData()
    {
        $arr=$this->getNullArray();
        foreach($this->getNullArray() as $key =>$value)
        {
            $arr[$key]=1;
        }
        $this->setNullArray($arr);
    }
    public function setData($name,$value)
    {
        $method="set".$name;
        $arr=$this->getNullArray();
        $arr[$name]=0;
        $this->setNullArray($arr);
        $this->$method($value);
    }
    public function addRow($columnArray,$record,$delim)
    {
        $tempA=explode("\n",$record);
        $dataA=explode($delim,$tempA[0]);
        foreach($columnArray as $key =>$name)
        {
            $value=$dataA[$key];
            $name=trim($name);
            $this->setData($name, $value);
        }
        
    }
    /**
     * @return mixed
     */
    public function getNullArray()
    {
        return $this->nullArray;
    }

    /**
     * @param mixed $nullArray
     */
    public function setNullArray($nullArray)
    {
        $this->nullArray = $nullArray;
    }

}

