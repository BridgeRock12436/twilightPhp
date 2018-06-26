<?php
/*require_once 'DbRecord.php';*/


class MemberConvertRecord extends DbRecord
{
    private $rowid;
    private $family_number;
    private $family_generation;
    private $family_type;
    private $root;
    private $twilight_id;

    public function toString($delim)
    {
        $line="";
        $pre="";
        $line.=$pre.$this->getRowid();
        $pre=$delim;
        $line.=$pre.$this->getFamily_number();
        $line.=$pre.$this->getFamily_generation();
        $line.=$pre.$this->getFamily_type();
        
        $line.=$pre.$this->getRoot();
        $line.=$pre.$this->getTwilight_id();
        
        return $line;
    }
    public function __construct()
    {
        parent::__construct();
    }

    function __destruct()
    {}
    /**
     * @return mixed
     */
    public function getRowid()
    {
        return $this->rowid;
    }

    /**
     * @return mixed
     */
    public function getFamily_number()
    {
        return $this->family_number;
    }

    /**
     * @return mixed
     */
    public function getFamily_generation()
    {
        return $this->family_generation;
    }

    /**
     * @return mixed
     */
    public function getFamily_type()
    {
        return $this->family_type;
    }

    /**
     * @return mixed
     */
    public function getRoot()
    {
        return $this->root;
    }

    /**
     * @return mixed
     */
    public function getTwilight_id()
    {
        return $this->twilight_id;
    }

    /**
     * @param mixed $rowid
     */
    public function setRowid($rowid)
    {
        $this->rowid = $rowid;
    }

    /**
     * @param mixed $family_number
     */
    public function setFamily_number($family_number)
    {
        $this->family_number = $family_number;
    }

    /**
     * @param mixed $family_generation
     */
    public function setFamily_generation($family_generation)
    {
        $this->family_generation = $family_generation;
    }

    /**
     * @param mixed $family_type
     */
    public function setFamily_type($family_type)
    {
        $this->family_type = $family_type;
    }

    /**
     * @param mixed $root
     */
    public function setRoot($root)
    {
        $this->root = $root;
    }

    /**
     * @param mixed $twilight_id
     */
    public function setTwilight_id($twilight_id)
    {
        $this->twilight_id = $twilight_id;
    }

}

