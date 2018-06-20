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
        $rFn="c:\\twilight\\data\\".$fn;
        echo $rFn."\n";
        $f=fopen($rFn,"r");
        $delim="\t";
        if($f == null) return null;
        $line=fgets($f);
        if($line == null) return null;
        $tempA=explode("\n",$line);
        $columnArr=explode($delim,$tempA[0]);
//         print_r($columnArr);
        $headPtr=null;
        $travp=null;
        $ct=0;
        while(($line=fgets($f))!=null)
        {
//              echo $line."\n";
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
//             print_r($listPtr);
            $travp->add($listPtr);
            $travp=$travp->getNext();
//             print_r($travp);
            
        }
        $this->setHeadPtr($headPtr);
    }
}

