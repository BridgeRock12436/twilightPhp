
<?php
require_once 'inc.php';
$varObj=new varObj();
$dbObj=new db($varObj);
$sel="select distinct table_name from INFORMATION_SCHEMA.COLUMNS";
echo $sel;
$sel.=" WHERE Table_Schema='".$dbObj->getVarT()->getTable_schema()."'";
echo $sel;
$outFn="../run/runAll.sh";
$outF=fopen($outFn,"w");
fprintf($outF,"BIN=../run/\n");
$stmnt=$dbObj->run_sql($sel);
$result=$stmnt->fetchAll();
foreach($result as $key =>$tableNameA)
{
	$tableName=$tableNameA["table_name"];
	echo $tableName;
	fprintf($outF,"\${BIN}runDumpOneTable.sh %s >%s.log 2>%s.err\n",$tableName,$tableName,$tableName);

}
fclose($outF);
?>
