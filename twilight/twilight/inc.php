<?php
if (array_key_exists("USER", $$_SERVER))
{
    $dr="/home/twilightPark/twilight";
}
else {

    $dr="C:\\twilightPhpWorkSpace\\twilight";
}
$incP=get_include_path();
$incP.=PATH_SEPARATOR;
$incP.=$dr.DIRECTORY_SEPARATOR."db;";
$incP.=$dr.DIRECTORY_SEPARATOR."file;";
$incP.=$dr.DIRECTORY_SEPARATOR."CreateScript;";
$incP.=$dr.DIRECTORY_SEPARATOR."file;";
 echo $incP;
set_include_path($incP);
/* require_once 'inc.php'; */
require_once 'vars.php';
require_once 'db.php';
require_once    'DbRecord.php';
require_once 'MemberConvertRecord.php';
require_once 'MetaColumnRecord.php';
require_once 'DbMetaObj.php';
require_once 'TwilList.php';
require_once 'listHold.php';
require_once 'DbFileMetaListHold.php';
require_once 'CreateInc.php';
require_once 'fileInc.php';


?>