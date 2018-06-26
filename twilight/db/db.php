<?php



class db
{
	var $vart;
	var $pdo;
	function db()
	{
		$this->vart=new varobj();
		$this->db_connect();
	}
			
	
	function db_connect ()
	{
		$vart=$this->vart;
		$host=$vart->getHost();
		$db=$vart->getDb();
		$charset=$vart->getCharset();
		$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
		$opt = [
		    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		    PDO::ATTR_EMULATE_PREPARES   => false,
		];
		$user=$vart->getUserid();
		$pass=$vart->getPassword();
		$pdo = new PDO($dsn, $user, $pass, $opt);
		$this->setPdo($pdo);
	}
	public static function ignoreColumns()
	{
	    return "('AddedBy','AddedDate','ModifiedBy','ModifiedDate','logname','logdate')";
	}
	public function run_sql($selString)
	{
	    $stmnt=$this->getPdo()->query($selString);
	    return $stmnt;
	}
 
    /**
     * @return varobj
     */
    public function getVart()
    {
        return $this->vart;
    }

    /**
     * @return mixed
     */
    public function getPdo()
    {
        return $this->pdo;
    }

    /**
     * @param varobj $vart
     */
    public function setVart($vart)
    {
        $this->vart = $vart;
    }

    /**
     * @param mixed $pdo
     */
    public function setPdo($pdo)
    {
        $this->pdo = $pdo;
    }


	
}

?>
