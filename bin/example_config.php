<?php
/*
DatabaseConnection

Connects script to MySQL database. Edit the configuration below
*/
class DatabaseConnection {

  //Server host or IP:Port  if remotely connecting
  private $db_host = "localhost";
  //Database Username
  private $db_user = "";
  //Database Password
  private $db_pass = "";
  //Database name
  private $db_name = "dayz";

  function __construct()
  {
    $this->connect();
  }
  
  public function connect()
  {
    mysql_connect($this->db_host,$this->db_user,$this->db_pass) or die(mysql_error());
    $this->selectDatabase($this->db_name);
  }
  
  public function selectDatabase($db) {
    mysql_select_db($db);
  }
}

/*
Configuration
*/
$config = array();
$config['instance'] = 1; // Instance number
$config['icons'] = true;
?>
