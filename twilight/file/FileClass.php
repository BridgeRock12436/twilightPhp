<?php

class FileClass
{
    private $filePtr;
    private $fn;
    private $type;
    public function __construct($name,$type)
    {
        $this->setFn($name);
        $this->setType($type);
        $f=fopen($this->getFn(),$this->getType());
        if($f==null)
        {
            $ex=new Exception($this->getFn()." CAN NOT BE OPENED");
            throw $ex;
        }
        $this->setFilePtr($f);
    }
    public function close()
    {
        fclose($this->getFilePtr());
    }
    public function write($line)
    {
        fprintf($this->getFilePtr(),"%s",$line);
    }
    public function writeLn($line)
    {
        fprintf($this->getFilePtr(),"%s\n",$line);
    }
    function __destruct()
    {}
    /**
     * @return mixed
     */
    public function getFilePtr()
    {
        return $this->filePtr;
    }

    /**
     * @return mixed
     */
    public function getFn()
    {
        return $this->fn;
    }

    /**
     * @param mixed $filePtr
     */
    public function setFilePtr($filePtr)
    {
        $this->filePtr = $filePtr;
    }

    /**
     * @param mixed $fn
     */
    public function setFn($fn)
    {
        $this->fn = $fn;
    }
    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }


}

