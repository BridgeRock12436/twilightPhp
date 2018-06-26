<?php
require_once 'inc.php';

$varObj=new varObj();
$dbObj=new db($varObj);
$dbTable=new DbTable($dbObj,"Member_Convert");
$dbTable->query();
while($dbTable->hasNext())
{
	$row=$dbTable->next();
	echo $row->toString("\t")."\n";
}

?>
