<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
if (array_key_exists("USER", $_SERVER))
{
$pwG=$_SERVER["PWD"];
$arr=explode("/",$pwG);
$ctA=count($arr);
$drN1="";
$pre="";
for($i=0;$i<$ctA-1;$i++)
{
	$drN1.=$pre.$arr[$i];
	$pre="/";
}
//echo $drN1.PHP_EOL;
//echo $pwG.PHP_EOL;
$bsn=basename($pwG);
//echo $bsn.PHP_EOL;
    $dr=$drN1;
}
else {

    $dr="C:\\twilightPhpWorkSpace\\twilight";
}
$incP=get_include_path();
$pS=PATH_SEPARATOR;
$incP.=PATH_SEPARATOR;
$incP.=$dr.DIRECTORY_SEPARATOR."db".$pS;
$incP.=$dr.DIRECTORY_SEPARATOR."file".$pS;
$incP.=$dr.DIRECTORY_SEPARATOR."CreateScript".$pS;
$incP.=$dr.DIRECTORY_SEPARATOR."file".$pS;
$incP.=$dr.DIRECTORY_SEPARATOR."DbRecord".$pS;
set_include_path($incP);
require_once 'CreateInc.php';
require_once 'dbInc.php';
require_once 'CreateInc.php';
require_once 'fileInc.php';
require_once 'DbRecordInc.php';

?>
