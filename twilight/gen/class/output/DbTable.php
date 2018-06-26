<?php











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
	private $dataArray;
	private $recordIndex;
	private $recordCount;
	public function __construct($argDbObj,$argTableName)
	{
			$this->setDbObj($argDbObj);
			$this->setTableName($argTableName);
	}
	public function __destruct()
	{
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
