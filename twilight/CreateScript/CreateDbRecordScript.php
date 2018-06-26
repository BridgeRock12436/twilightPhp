<?php


class CreateDbRecordScript extends \CreateScript
{

    public function __construct($listPtr, $TableName)
    {
        parent::__construct($listPtr, $TableName);
    }

    function __destruct()
    {}
   
    public function makeFileName()
    {
        $fn=$this->getTableName()."_DBREC.php";
        $this->setFileName($fn);
        $rfn="../DbRecord/".$fn;
        return $rfn;
    }
    public function body()
    {
        $this->printVariables();
        $this->printConstructors();
        $this->printToString();
        $this->printGetters();
        $this->printSetters();
    }
    private function printGetters()
    {
        $travp=$this->getListPtr();
        $fObj=$this->getFileObj();
        while($travp != null)
        {
            $dataPtr=$travp->getData();
            $colN=$dataPtr->getColumn_Name();
            $uColN=ucfirst($colN);
            $line="\tpublic function get".$uColN."()";
            $fObj->writeLn($line);
            $line="\t{";
            $fObj->writeLn($line);
            $line="\t\treturn \$this->".$colN.";";
            $fObj->writeLn($line);
            $line="\t}";
            $fObj->writeLn($line);
            $travp=$travp->next();
            
            
        }
        
    }
    private function printSetters()
    {
        $travp=$this->getListPtr();
        $fObj=$this->getFileObj();
        while($travp != null)
        {
            $dataPtr=$travp->getData();
            $colN=$dataPtr->getColumn_Name();
            $uColN=ucfirst($colN);
            $line="\tpublic function set".$uColN."(\$data)";
            $fObj->writeLn($line);
            $line="\t{";
            $fObj->writeLn($line);
            $line="\t\t\$this->".$colN."=\$data;";
            $fObj->writeLn($line);
            $line="\t}";
            $fObj->writeLn($line);
            $travp=$travp->next();
            
            
        }
        
    }
    
    private function printToString()
    {
        $travp=$this->getListPtr();
        $fObj=$this->getFileObj();
        $line="\tpublic function toString(\$delim)";
        $fObj->writeLn($line);
        $line="\t{";
        $fObj->writeLn($line);
        $line="\t\t\t\$line=\"\";";
        $fObj->writeLn($line);
        $line="\t\t\t\$pre=\"\";";
        $fObj->writeLn($line);
        while($travp != null)
        {
            $dataPtr=$travp->getData();
            $colN=ucfirst($dataPtr->getColumn_Name());
            $line="\t\t\t\$line.=\$pre.\$this->get".$colN."();";
            $fObj->writeLn($line);
            $line="\t\t\t\$pre=\$delim;";
            $fObj->writeLn($line);
            $travp=$travp->next();
            
            
        }
        $line="\t\treturn \$line;";
        $fObj->writeLn($line);
        $line="\t}";
        $fObj->writeLn($line);
        
            
        
    }
    private function printVariables()
    {
        $travp=$this->getListPtr();
        $fObj=$this->getFileObj();
        while($travp!=null)
        {
            $dataPtr=$travp->getData();
            $colN=$dataPtr->getColumn_Name();
            $line="\tprivate $".$colN.";";
            $fObj->writeLn($line);
            $travp=$travp->next();
        }
    }
    public function writeClass(){
        $fObj=$this->getFileObj();
        $fObj->writeLn("");
        $fObj->writeLn("");
        $fObj->writeLn("");
        $fObj->writeLn("");
/*         class MemberConvertRecord extends DbRecord
        { */
        $line="class ".$this->getTableName()."_DBREC extends DbRecord";
        $fObj->writeLn($line);
        $fObj->writeLn("{");
    }
}

