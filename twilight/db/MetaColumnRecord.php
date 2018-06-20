<?php


class MetaColumnRecord extends DbRecord
{
    private $columnsA;

    private $Ordinal_Position;
    private $Table_Catalog;
    private $Table_Schema;
    private $Table_Name;
    private $Column_Name;
    private $Is_Nullable;
    private $Data_Type;
    private $Numeric_Precision;
    private $Numeric_Scale;
    
    public function __construct()
    {
        parent::__construct();
        
    }

    function __destruct()
    {}
    public static function selectClause()
    {
    
        $ret="Ordinal_Position,Table_Catalog,Table_Schema,Table_Name";
        $ret.=",Column_Name,Is_Nullable,Data_Type,Numeric_Precision";
        $ret.=",Numeric_Scale";
        return $ret;
    }
    
    /**
     * @return mixed
     */
    
    /**
     * @return mixed
     */
    public function getOrdinal_Position()
    {
        return $this->Ordinal_Position;
    }

    /**
     * @return mixed
     */
    public function getTable_Catalog()
    {
        return $this->Table_Catalog;
    }

    /**
     * @return mixed
     */
    public function getTable_Schema()
    {
        return $this->Table_Schema;
    }

    /**
     * @return mixed
     */
    public function getTable_Name()
    {
        return $this->Table_Name;
    }

    /**
     * @return mixed
     */
    public function getColumn_Name()
    {
        return $this->Column_Name;
    }

    /**
     * @return mixed
     */
    public function getIs_Nullable()
    {
        return $this->Is_Nullable;
    }

    /**
     * @return mixed
     */
    public function getData_Type()
    {
        return $this->Data_Type;
    }

    /**
     * @return mixed
     */
    public function getNumeric_Precision()
    {
        return $this->Numeric_Precision;
    }

    /**
     * @return mixed
     */
    public function getNumeric_Scale()
    {
        return $this->Numeric_Scale;
    }

    

    /**
     * @param mixed $Ordinal_Position
     */
    public function setOrdinal_Position($Ordinal_Position)
    {
        $this->Ordinal_Position = $Ordinal_Position;
    }

    /**
     * @param mixed $Table_Catalog
     */
    public function setTable_Catalog($Table_Catalog)
    {
        $this->Table_Catalog = $Table_Catalog;
    }

    /**
     * @param mixed $Table_Schema
     */
    public function setTable_Schema($Table_Schema)
    {
        $this->Table_Schema = $Table_Schema;
    }

    /**
     * @param mixed $Table_Name
     */
    public function setTable_Name($Table_Name)
    {
        $this->Table_Name = $Table_Name;
    }

    /**
     * @param mixed $Column_Name
     */
    public function setColumn_Name($Column_Name)
    {
        $this->Column_Name = $Column_Name;
    }

    /**
     * @param mixed $Is_Nullable
     */
    public function setIs_Nullable($Is_Nullable)
    {
        $this->Is_Nullable = $Is_Nullable;
    }

    /**
     * @param mixed $Data_Type
     */
    public function setData_Type($Data_Type)
    {
        $this->Data_Type = $Data_Type;
    }

    /**
     * @param mixed $Numeric_Precision
     */
    public function setNumeric_Precision($Numeric_Precision)
    {
        $this->Numeric_Precision = $Numeric_Precision;
    }

    /**
     * @param mixed $Numeric_Scale
     */
    public function setNumeric_Scale($Numeric_Scale)
    {
        $this->Numeric_Scale = $Numeric_Scale;
    }
    /**
     * @return mixed
     */
    public function getColumnsA()
    {
        return $this->columnsA;
    }

    /**
     * @param mixed $columnsA
     */
    public function setColumnsA($columnsA)
    {
        $this->columnsA = $columnsA;
    }
    public function toString($delim)
    {
        $pre="";
        $line=$pre.$this->getOrdinal_Position();
        $pre=$delim;
        
        /**
         * @return mixed
         */
        $line.=$pre.$this->getTable_Catalog();
        
        $line.=$pre.$this->getTable_Schema();
    
        $line.=$pre.$this->getTable_Name();
        $line.=$pre.$this->getColumn_Name();
        $line.=$pre.$this->getIs_Nullable();
        $line.=$pre.$this->getData_Type();
        $line.=$pre.$this->getNumeric_Precision();
        $line.=$pre.$this->getNumeric_Scale();
        return $line;
  
        
        
    }

}

