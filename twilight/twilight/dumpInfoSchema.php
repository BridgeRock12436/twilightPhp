<?php
require_once 'inc.php';
print_r($argv);
print_r($_SERVER);
print_r($_ENV);
$f=fopen($argv[1],"w");
if($f==null) exit(-109);
$s=MetaColumnRecord::selectClause();
$arr=explode(",",$s);
print_r($arr);
$line="";
$pre="";
foreach($arr as $key => $value)
{
    $line.=$pre.$value;
    $pre="\t";
    
}
fprintf($f,"%s\n",$line);
$dr=dirname($argv[0]);
echo $dr;
$varObj=new varObj();
/* print_r($varObj); */
$dbObj=new db($varObj);
$where=" where table_schema='jgalatti_twilight'";
$where.=" and Column_Name Not in ".db::ignoreColumns();
$qry=DbMetaObj::metaQueryString($where);
$stmnt=$dbObj->run_sql($qry);
$dataArray=$stmnt->fetchAll(PDO::FETCH_CLASS,'MetaColumnRecord');
print_r($dataArray);
foreach($dataArray as $key =>$value)
{
    $line=$value->toString("\t");
    fprintf($f,"%s\n",$line);
    
}
fclose($f);
?>