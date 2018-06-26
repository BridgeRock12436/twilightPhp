<?php
require_once 'dbInc.php';


class DbMetaObj
{
    private $dbObj;
    private $columnArray;
    private $table_name;
    
    
    public function DbMetaObj($dbObj,$Table_Name)
    
    {
        $this->setDbObj($dbObj);
        $this->setTable_name($Table_Name);
        $this->makeColumnArray();
        
    }
    public function makeColumnArray()
    {
        $where=" WHERE TABLE_SCHEMA='".$this->getDbObj()->getVart()->getTable_schema()."'";
        $where.=" AND TABLE_NAME ='".$this->getTable_name()."'";
        $where.=" AND COLUMN_NAME NOT in ".db::ignoreColumns();
       $qry=DbMetaObj::metaQueryString($where);
        $stmnt=$this->getDbObj()->run_sql($qry);
        $columnArray=$stmnt->fetchAll(PDO::FETCH_CLASS,'MetaColumnRecord'); 
         $this->setColumnArray($columnArray);
    }
    public static function metaQueryString($where)
    {
        $sel=" select ";
        $sel.=MetaColumnRecord::selectClause();
        $from=" from INFORMATION_SCHEMA.COLUMNS ";
       
        $order=" ORDER BY TABLE_SCHEMA,TABLE_NAME,ORDINAL_POSITION";
        $qry=$sel." ".$from." ".$where." ".$order;
        return $qry;
        
    }
    function __destruct()
    {}
    /**
     * @return mixed
     */
    public function getDbObj()
    {
        return $this->dbObj;
    }

    /**
     * @return mixed
     */
    public function getColumnArray()
    {
        return $this->columnArray;
    }

    /**
     * @return mixed
     */
    public function getTable_name()
    {
        return $this->table_name;
    }

    /**
     * @param mixed $dbObj
     */
    public function setDbObj($dbObj)
    {
        $this->dbObj = $dbObj;
    }

    /**
     * @param mixed $columnArray
     */
    public function setColumnArray($columnArray)
    {
        $this->columnArray = $columnArray;
    }

    /**
     * @param mixed $table_name
     */
    public function setTable_name($table_name)
    {
        $this->table_name = $table_name;
    }

}

