<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'inc.php';
$varObj=new varObj();
$dbObj=new db($varObj);
/* $convR=new MemberConvertRecord();
$stmnt=$dbObj->run_sql("select rowid,family_number,family_generation,family_type,root,twilight_id from member_convert");
/* $row=$stmnt->fetchAll(PDO::FETCH_CLASSTYPE,'MemberConvertRecord'); */
/* $row=$stmnt->fetchAll(PDO::FETCH_CLASS,'MemberConvertRecord'); 
foreach($row as $key => $rec)
{
    echo $rec->toString("\t")."\n" ; 
}
 */
$metaObj=new DbMetaObj($dbObj,"Member_Convert");
print_r($metaObj);
?>
