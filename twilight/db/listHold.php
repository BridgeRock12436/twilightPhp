<?php


class listHold
{
    private $headPtr;
    public function __construct($data)
    {
        $this->makeList($data);
    }
    public function makeList($data)
    {
        $this->setHeadPtr(null);
    }
    function __destruct()
    {}
    /**
     * @return mixed
     */
    public function getHeadPtr()
    {
        return $this->headPtr;
    }

    /**
     * @param mixed $headPtr
     */
    public function setHeadPtr($headPtr)
    {
        $this->headPtr = $headPtr;
    }
    public static function printList($listPtr)
    {
        $travp=$listPtr;
        while($travp!=null)
        {
            echo  "<DATA>\n";
            print_r($travp->getData());
            $travp=$travp->next();
        }
    }

}

