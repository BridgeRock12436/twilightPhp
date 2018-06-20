<?php


class CreateAllScripts
{
    private $colListPtr;

    public function __construct()
    {
        $listPtr=new DbFileMetaListHold("infoSchema.txt");
        $this->setColListPtr($listPtr);
        $this->run();
    }
    public function run()
    {
        $headPtr=$this->getColListPtr()->getHeadPtr();
//         print_r($headPtr);
        
        if($headPtr->hasNext()==false)
        {
            $ex=new Exception("EMPTY LIST");
            throw $ex;
        }
       // print_r($headPtr->getData());
        $dHeadPtr=new Twillist($headPtr->getData());
        $dtravp=$dHeadPtr;
        $oldTableName=$dtravp->getData()->getTable_Name();
        $travp=$headPtr->next();
        while($travp->hasNext())
        {
            $dataPtr=$travp->getData();
//            print_r($dataPtr); 
            $tableName=$travp->getData()->getTable_Name();
            
           /*  echo $tableName." NEW OLD ".$oldTableName."\n"; */
            if(strcmp($tableName, $oldTableName)!= 0)
            {  /*  echo "<DIFFERENT\n";
                listHold::printList($dHeadPtr); */
                $crObj=new CreateDbRecordScript
                ($dHeadPtr, $oldTableName);
                $dHeadPtr=new Twillist($dataPtr);
                $dtravp=$dHeadPtr;
                $oldTableName=$dtravp->getData()->getTable_Name();
                $travp=$travp->next();
                continue;
            }
//             echo $dataPtr->getColumn_Name()." COL NAME\n";
            $allocPtr=new Twillist($dataPtr);
          /*   print_r($allocPtr); */
         /*    echo "BEFORE ADD\n";
            print_r($dtravp); */
            $dtravp->add($allocPtr);
          /*   print_r($dtravp); */
            $dtravp=$dtravp->next();
            $travp=$travp->next();
        }
        if($dHeadPtr!= null)
        {
            $crObj=new CreateDbRecordScript
            ($dHeadPtr, $oldTableName);
        }
        
    }
    function __destruct()
    {}
    /**
     * @return mixed
     */
    public function getColListPtr()
    {
        return $this->colListPtr;
    }

    /**
     * @param mixed $colListPtr
     */
    public function setColListPtr($colListPtr)
    {
        $this->colListPtr = $colListPtr;
    }

}

