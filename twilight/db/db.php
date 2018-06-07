<?php



class db
{
	var $vart;
	function db()
	{
		$this->vart=new varobj;
		$this->db_connect();
	}
			
	
	function db_connect ()
	{
		$vart=$this->vart;
	/*echo "MAIN DB CONSTRUCTOR<br>";*/
		$connection=mysql_connect($vart->host(),$vart->userid(),$vart->password()) or die("Unable to connect");
	/*echo "db = ".$vart->db();*/
	mysql_select_db($vart->db) or die("unable to connect to ".$vart->db);
	/*echo   "IN CONSTRUCTOR";*/
	}
 	function get_db()	
 	{
		$vart=$this->vart;
		return($vart->db);
	}
 		
        function fetch($arg_result)
        {
                $row=mysql_fetch_array($arg_result,MYSQL_BOTH);
                return($row);
        }
        function num_rows($arg_result)
        {
                $num_rows=mysql_num_rows($arg_result);
                return($num_rows);
        }

        function run_sql($arg_sql)
        {
                $result=
                        mysql_query($arg_sql) or die ("error in sql statement: $arg_sql" . mysql_error());
                $ret=mysql_affected_rows();

                $this->affected_rows=$ret;
                mysql_query("COMMIT");     
                return($result);
        }
        function run_php_sql($arg_sql)
        {
                $result=
                        mysql_query($arg_sql) ;
		$ret=mysql_error();
                $ret=mysql_affected_rows();

                $this->affected_rows=$ret;
                mysql_query("COMMIT");      
                return($result);
        }

	
	function email_address($arg_user_id)
	{
		$s="select family_number,family_generation,family_type,root";
		$s.=" from users ";
		$s.=" Where userid='".$arg_user_id."'";
		$res=db::run_sql($s);
		$n=db::num_rows($res);
		if($n== 0)
		{
			return("");
		}
		$row=db::fetch($res);
		$family_number=$row['family_number'];
		$family_generation=$row['family_generation'];
		$family_type=$row['family_type'];
		$root=$row['root'];
		#echo "<br>  ".$arg_user_id;
		#echo "<br>  ".$family_number;
		#echo "<br>  ".$family_generation;
		#echo "<br>  ".$family_type;
		#echo "<br>  ".$root;
		$s="select email_address from twilight_member ";
		$s.="where family_number = '".$family_number."'";
		$s.=" and  family_generation = '".$family_generation."'";
		$s.=" and  family_type = '".$family_type."'";
		$s.=" and  root = '".$root."'";
		#echo "<br> S = ".$s;
		$res=db::run_sql($s);
		$n=db::num_rows($res);
		if($n== 0)
		{
			return("");
		}
		$row=db::fetch($res);
		#echo "<br> EMAIl = ".$row[0];
		return($row[0]);
	}

	
}
class db_bridge extends db
{
		function db_bridge()
		{
				$this->vart=new bridgevarobj;
				$this->db_connect();
		}
}
class db_info_schema extends db
{
		function db_info_schema()
		{
			$this->vart=new info_schemaVarObj;
				$this->db_connect();
		}
}
class db_panther extends db
{
		function db_panther()
		{
				$this->vart=new pantherVarObj;
				print_r($this->vart);
				$this->db_connect();
		}
}
class calendarDb extends db
{
		function calendarDb()
		{
				$this->vart=new calVarObj();
				$this->db_connect();
		}
}
?>
