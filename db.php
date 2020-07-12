<?php

class Database{
private $db_host = "localhost";
private $db_user = "root";
private $db_pass = "";
private $db_name = "database";


//create Connection
protected $con;

public function connect(){

  if(!isset($this->con)){
    $this->connection = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
      if(!$this->con){
        echo 'Cannot connect to database server';
      }
    }
    return $this->connection ;
  }
}
 ?>
