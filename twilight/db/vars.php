<?php

define("DIR_SEP",'/');

class varobj{
var $userid;
var $password;
var $host;
var $db;
var $table_catalog;
var $table_schema;
var $charset;
function varobj()
{
	
	$this->userid="jgalatti";
	$this->password="jojo2231";
	$this->host="localhost";
	$this->db="jgalatti_twilight";
	$this->setTable_catalog("def");
	$this->setTable_schema("jgalatti_twilight");
	$this->setCharset("utf8");
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
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param string $host
     */
    public function setHost($host)
    {
        $this->host = $host;
    }

    /**
     * @return string
     */
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
     * @param string $db
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
    /**
     * @return mixed
     */
    public function getCharset()
    {
        return $this->charset;
    }

    /**
     * @param mixed $charset
     */
    public function setCharset($charset)
    {
        $this->charset = $charset;
    }
    /**
     * @return mixed
     */
    public function getTable_schema()
    {
        return $this->table_schema;
    }

    /**
     * @param mixed $table_schema
     */
    public function setTable_schema($table_schema)
    {
        $this->table_schema = $table_schema;
    }





	 
}

		
?>
