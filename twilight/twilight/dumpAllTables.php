<?php
require_once 'inc.php';

$varObj=new varObj();
$dbObj=new db($varObj);
$sel="select distinct table_name from INFORMATION_SCHEMA.COLUMNS";
echo $sel;
$sel.=" WHERE Table_Schema='".$dbObj->getVarT()->getTable_schema()."'";
$sel.=" and  Table_Name='cottage'";
echo $sel;

$stmnt=$dbObj->run_sql($sel);
$result=$stmnt->fetchAll();
print_r($result);
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
		print_r($dObj);
		$data=$dObj->toString("\t");
		fprintf($outF,"%s\n",$data);
	}
	fclose($outF);
}
print_r($result);
?>
