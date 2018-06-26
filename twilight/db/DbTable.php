<?php
require_once 'dbInc.php';











class DbTable
{
	private $dbObj;
	private $tableName;
	private $selectClause;
	private $fromClause;
	private $whereClause;
	private $orderClause;
	private $metaObj;
	private $recordClassName;
	public function __construct($argDbObj,$argTableName)
	{
			$this->setDbObj($argDbObj);
			$this->setTableName($argTableName);
			$this->init();
	}
	public function __destruct()
	{
	}
	private function init()
	{
		$metaObj=new DbMetaObj($this->getDbObj(),$this->getTableName());
		$this->setMetaObj($metaObj);
		$recClass=$this->getTableName()."_DBREC";
		$this->setRecordClassName($recClass);
		$this->buildSelectClause();
		$this->setFromClause("");
		$this->setWhereClause("");
		$this->setOrderClause("");
		
	}
	public function buildSelectClause()
	{
		$sel="";
		$pre="";
		$colA=$this->getMetaObj()->getColumnArray();
		foreach($colA as $key =>$value)
		{
			$colN=$value->getColumn_Name();
			$sel.=$pre.$colN;
			$pre=",";
		}
		$this->setSelectClause($sel);
	}
	public function query()
	{
		$qry=func::retStatementPart("select", $this->getSelectClause());
		$qry.=func::retStatementPart("from", $this->getTableName());
		$qry.=func::retStatementPart("where", $this->getWhereClause());
		$qry.=func::retStatementPart("order", $this->getOrderClause());
		$stmnt=$this->getDbObj()->run_sql($qry);
		$dataArray=$stmnt->fetchAll(PDO::FETCH_CLASS,$this->getRecordClassName());
		$ct=count($dataArray);
		
		$this->setDataArray($dataArray);
		$this->setRecordCount($ct);
		$this->setRecordIndex(0);
	}
	public function hasNext()
	{
		$ri=$this->getRecordIndex();
		$rc=$this->getRecordCount();
		if($ri >= $rc) return false;
		return true;
	}
	public function next()
	{
		if($this->hasNext()==false) return null;
		$ri=$this->getRecordIndex();
		$arr=$this->getDataArray();
		$ret=$arr[$ri];
		$ri++;
		$this->setRecordIndex($ri);
		return $ret;
	}
	public function getDbObj() 
	{
		return $this->dbObj;
	}
	public function getTableName() 
	{
		return $this->tableName;
	}
	public function getSelectClause() 
	{
		return $this->selectClause;
	}
	public function getFromClause() 
	{
		return $this->fromClause;
	}
	public function getWhereClause() 
	{
		return $this->whereClause;
	}
	public function getOrderClause() 
	{
		return $this->orderClause;
	}
	public function getMetaObj() 
	{
		return $this->metaObj;
	}
	public function getRecordClassName() 
	{
		return $this->recordClassName;
	}
	public function setDbObj($data) 
	{
		$this->dbObj=$data;
	}
	public function setTableName($data) 
	{
		$this->tableName=$data;
	}
	public function setSelectClause($data) 
	{
		$this->selectClause=$data;
	}
	public function setFromClause($data) 
	{
		$this->fromClause=$data;
	}
	public function setWhereClause($data) 
	{
		$this->whereClause=$data;
	}
	public function setOrderClause($data) 
	{
		$this->orderClause=$data;
	}
	public function setMetaObj($data) 
	{
		$this->metaObj=$data;
	}
	public function setRecordClassName($data) 
	{
		$this->recordClassName=$data;
	}
	public function getDataArray() 
	{
		return $this->dataArray;
	}
	public function getRecordIndex() 
	{
		return $this->recordIndex;
	}
	public function getRecordCount() 
	{
		return $this->recordCount;
	}
	public function setDataArray($data) 
	{
		$this->dataArray=$data;
	}
	public function setRecordIndex($data) 
	{
		$this->recordIndex=$data;
	}
	public function setRecordCount($data) 
	{
		$this->recordCount=$data;
	}
}
?>
