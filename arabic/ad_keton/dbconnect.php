<?php 
error_reporting(0);
date_default_timezone_set('Asia/Kolkata');
include 'crossplatform.php';
cors();
 class dbconnect 
  { 
  private $_localhost = 'localhost'; 
  private $_user = 'root'; 
  private $_password = ''; 
  private $_dbname = 'ketonefinal'; 
  protected $connection;
   public function __construct()
   { 
   if(!isset($this-> connection)) 
   { 
               
               $this->connection = new mysqli($this->_localhost , $this->_user , $this->_password , $this->_dbname); 
   
   }
   return $this->connection;
   } 
 } 
 ?>