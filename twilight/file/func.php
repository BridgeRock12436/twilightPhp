<?php


class func
{

    public function __construct()
    {}

    function __destruct()
    {}
    public static function currDir()
    {
        return getcwd();
    }
    public static function retStatementPart($part,$data)
    {
    	if(strlen($data) ==0) return "";
    	$ret=" ".$part." ".$data;
    	return $ret;
    }
    
}

