<?php
error_reporting(0);
date_default_timezone_set('Asia/Kolkata');
include 'crossplatform.php';
cors();
 class dbconnect
  {
  private $_localhost = '216.10.241.228';
  private $_user = 'uniquvhx_jay';
  private $_password = 'Jay@1234567890';
  private $_dbname = 'uniquvhx_KetoneLaminates';
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
 