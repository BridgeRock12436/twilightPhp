<?php


require_once 'inc.php';
$varObj=new varObj();
/* print_r($varObj); */
$dbObj=new db($varObj);
/* print_r($dbObj); */
/* $convR=new MemberConvertRecord();
$stmnt=$dbObj->run_sql("select rowid,family_number,family_generation,family_type,root,twilight_id from member_convert");
/* $row=$stmnt->fetchAll(PDO::FETCH_CLASSTYPE,'MemberConvertRecord'); */
/* $row=$stmnt->fetchAll(PDO::FETCH_CLASS,'MemberConvertRecord'); 
 print_r($row); 
foreach($row as $key => $rec)
{
    echo $rec->toString("\t")."\n" ; 
}
 */
$metaObj=new DbMetaObj($dbObj,"Member_Convert");
print_r($metaObj);
?>