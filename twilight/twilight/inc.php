<?php
if (array_key_exists("USER", $_SERVER))
{
    $dr="/home/twilightPark/twilight/twilight";
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
 echo $incP;
set_include_path($incP);
/* require_once 'inc.php'; */
require_once 'vars.php';
require_once 'db.php';
require_once    'DbRecord.php';
require_once 'MemberConvertRecord.php';
require_once 'MetaColumnRecord.php';
require_once 'DbMetaObj.php';
require_once 'Twillist.php';
require_once 'listHold.php';
require_once 'DbFileMetaListHold.php';
require_once 'CreateInc.php';
require_once 'fileInc.php';
echo "END";

?>
