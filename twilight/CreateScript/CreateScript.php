<?php


class CreateScript
{
    private $tableName;
    private $listPtr;
    private $fileObj;
    private $fileName;

    public function __construct($listPtr,$TableName)
    {
        $this->setListPtr($listPtr);
        $this->setTableName($TableName);
        $this->init();
    }
    public function init()
    {
        $this->makeFileObj();
        $this->writePhp();
        $this->writeClass();
        $this->body();
        $this->end();
    }
    public function writeClass()
    {
        
    }
    public function body()
    {
        
    }
    public function printConstructors()
    {
        $fObj=$this->getFileObj();
        $line="\tpublic function __construct()";
        $fObj->writeLn($line);
         $line="\t{";
         $fObj->writeLn($line);
             $line="\t\tparent::__construct();";
             $fObj->writeLn($line);
         $line="\t}";
         $fObj->writeLn($line);
         $line="";
         $fObj->writeLn($line);
         $fObj->writeLn($line);
        /*  $fObj->writeLn($line);
         $fObj->writeLn($line); */
        
         $line="\tfunction __destruct()";
         $fObj->writeLn($line);
         $line="\t{";
         $fObj->writeLn($line);
         $line="\t}";
         $fObj->writeLn($line);
    }
    public function end()
    {
        $fObj=$this->getFileObj();
        $fObj=$this->getFileObj();
        $fObj->writeLn("}");
        $fObj->writeLn("");
        $fObj->writeLn("");
        $fObj->writeLn("");
        $fObj->writeLn("?>");
        $fObj->close();
    }
    public function makeFileObj()
    {
        $fn=$this->makeFileName();
        echo "\n".func::currDir()."\n";
        echo $fn."\n";
        try {
            $fObj=new FileClass($fn,"w");
        }catch(Exception $e)
        {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
            exit(-101);
        }
        
        $this->setFileObj($fObj);
    }
    public function writePhp()
    {
        $fObj=$this->getFileObj();
        $fObj->writeLn("<?php");
        $fObj->writeLn("");
        $fObj->writeLn("");
        $fObj->writeLn("");
        
    }
    function __destruct()
    {}
    /**
     * @return mixed
     */
    public function getTableName()
    {
        return $this->tableName;
    }

    /**
     * @return mixed
     */
    public function getListPtr()
    {
        return $this->listPtr;
    }

    /**
     * @return mixed
     */
    public function getFileObj()
    {
        return $this->fileObj;
    }

    /**
     * @param mixed $tableName
     */
    public function setTableName($tableName)
    {
        $this->tableName = $tableName;
    }

    /**
     * @param mixed $listPtr
     */
    public function setListPtr($listPtr)
    {
        $this->listPtr = $listPtr;
    }

    /**
     * @param mixed $fileObj
     */
    public function setFileObj($fileObj)
    {
        $this->fileObj = $fileObj;
    }
    /**
     * @return mixed
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param mixed $fileName
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
    }


}

