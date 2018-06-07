<?php
define("DIR_SEP",'/');

class varobj{
var $userid;
var $password;
var $localhost;
var $db;
var $table_catalog;
function varobj()
{
	
	$this->userid="jgalatti";
	$this->password="jojo2231";
	$this->host="localhost";
	$this->db="jgalatti_twilight";
	$this->setTable_catalog("jgalatti_twilight");
}
function host()
{
		return $this->host;
}
function userid()
{
		return $this->userid;
}
function password()
{
	  return $this->password;
}
function set_db($arg_val)
{
	$this->db=$arg_val;
}
function db()
{
		return $this->db;
}
/**
     * @return string
     */
    public function getUserid()
    {
        return $this->userid;
    }

/**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

/**
     * @return mixed
     */
    public function getLocalhost()
    {
        return $this->localhost;
    }


    public function getDb()
    {
        return $this->db;
    }

/**
     * @return mixed
     */
    public function getTable_catalog()
    {
        return $this->table_catalog;
    }

/**
     * @param string $userid
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    }

/**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

/**
     * @param mixed $localhost
     */
    public function setLocalhost($localhost)
    {
        $this->localhost = $localhost;
    }

/**
     * @param Ambigous <string, unknown> $db
     */
    public function setDb($db)
    {
        $this->db = $db;
    }

/**
     * @param mixed $table_catalog
     */
    public function setTable_catalog($table_catalog)
    {
        $this->table_catalog = $table_catalog;
    }

	 
}
class bridgevarobj extends varobj
{
	function bridgevarobj()
	{
			$this->userid="bridge";
			$this->password="twilight";
			$this->host="localhost";
			$this->db="bridge";
	}
}
class info_schemaVarObj extends varobj
{
	function info_schemaVarObj()
	{
			$this->userid="jgalatti";
			$this->password="brk11201";
			$this->host="localhost";
			$this->db="information_schema";
	}
}
class pantherVarObj extends varobj
{
	function pantherVarObj()
	{
			$this->userid="jgalatti";
			$this->password="brk11201";
			$this->host="panther.performancehosting.net";
			$this->db="jgalatti_twilight_test";
	}
}
class calVarObj extends varobj
{
	function calVarObj()
	{
			$this->userid="jgalatti_cal_test";
			$this->password="cal_test";
			$this->host="localhost";
			$this->db="jgalatti_calendar_test";
	}
}
class myCalVarObj extends varobj
{
	function myCalVarObj()
	{
		$flds=explode("/",$_SERVER["DOCUMENT_ROOT"]);
		if(strcasecmp($flds[3],"html") == 0)
		{
			$this->userid="myCal";
			$this->password="samantha";
			$this->host="localhost";
			$this->db="jgalatti_myCalendar";
		}
		if(strcasecmp($flds[3],"test_html") == 0)
		{
			$this->userid="testMyCal";
			$this->password="jojo";
			$this->host="localhost";
			$this->db="jgalatti_test_myCalendar";
		}
	}
}
		
?>
