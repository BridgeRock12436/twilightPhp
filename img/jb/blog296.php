<?php

ini_set('display_errors','1');

ob_start();
session_start();
require_once ('inc.php');

$headobj=new head("S");
$headobj->setJavaScript("func.js");
$headobj->printObj();
$headobj->printObjE();
$bodyObj=new body();
func::startStatistics();
$bodyObj->setJavascript('onload="load_blog();"');
$bodyObj->printObj();
$bodyObj->printEnd();
$headobj->printEnd();

?>

