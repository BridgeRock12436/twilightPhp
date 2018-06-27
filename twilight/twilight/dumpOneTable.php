<?php
require_once 'inc.php';
$tableName=$argv[1];
$varObj=new varObj();
$dbObj=new db($varObj);
$sel="select distinct table_name from INFORMATION_SCHEMA.COLUMNS";
echo $sel;
$sel.=" WHERE Table_Schema='".$dbObj->getVarT()->getTable_schema()."'";
$sel.=" and  Table_Name='".$tableName."'";
echo $sel;

$stmnt=$dbObj->run_sql($sel);
$result=$stmnt->fetchAll();
foreach($result as $key =>$tableNameA)
{
	$tableName=$tableNameA["table_name"];
	echo $tableName;
	$dbTableObj=new DbTable($dbObj,$tableName);
	$fn="../tableData/".$tableName.".txt";
	$outF=fopen($fn,"w");
	$dbTableObj->query();
	$line=$dbTableObj->getMetaObj()->header("\t");
	fprintf($outF,"%s\n",$line);
	while($dbTableObj->hasNext())
	{

		$dObj=$dbTableObj->next();
		$data=$dObj->toString("\t");
		fprintf($outF,"%s\n",$data);
	}
	fclose($outF);
}
?>
