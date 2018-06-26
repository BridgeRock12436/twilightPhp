<?php
require_once("DbRecord.php");
require_once("MetaColumnRecord.php");

class DbFileMetaListHold extends listHold
{
    private $headPtr;
    
    public function __construct($data)
    {
        parent::__construct($data);
        $this->makeList($data);
    }

    function __destruct()
    {}
    public function makeList($fn)
    {
        $rFn="../data/".$fn;
        $f=fopen($rFn,"r");
        $delim="\t";
        if($f == null) return null;
        $line=fgets($f);
        if($line == null) return null;
        $tempA=explode("\n",$line);
        $columnArr=explode($delim,$tempA[0]);
        $headPtr=null;
        $travp=null;
        $ct=0;
        while(($line=fgets($f))!=null)
        {
		echo $line;
             $ct++;
/*              if($ct==10) 
             {
                 listHold::printList($headPtr);
                 exit(-100);
             }
              */
            $allocPtr=new MetaColumnRecord();
            $allocPtr->addRow($columnArr, $line, $delim);
            $listPtr=new Twillist($allocPtr);
            if($headPtr==null)
            {
                $headPtr=$listPtr;
                $travp=$listPtr;
                continue;
            }
            $travp->add($listPtr);
            $travp=$travp->getNext();
            
        }
        $this->setHeadPtr($headPtr);
    }
}

