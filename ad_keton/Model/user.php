<?php
include_once __DIR__.'/../dbconnect.php';
class user extends dbconnect
{
    public $UserID;
    public $Name;
    public $Email;
    public $ContactNumber;
    public $Password;
    public $Created;
    public $Modified;
    //date time 
    public static function getDateForDatabase(string $date): string {
        $timestamp = strtotime($date);
        $date_formated = date('Y-m-d H:i:s', $timestamp);
        return $date_formated;
    }
    //select all data
    public function selectalldata()
    {
        $select = "SELECT 
        UserID,
        Name,
        Email,
        ContactNumber,
        Password,
        Created,
        Modified
         FROM  
         user
         ";

        $select1 = $this->connection->query($select);
        return $select1;
    }
    //select by pk
    public function selectbypk($pk)
    {
        $select = "SELECT 
        UserID,
        Name,
        Email,
        ContactNumber,
        Password,
        Created,
        Modified
         FROM  
         user
         Where  UserID=$pk;";

        $select1 = $this->connection->query($select);
        return $select1;
    }
    //login
    public function login()
    {
        $select = "SELECT 
        UserID,
        Name,
        Email,
        ContactNumber,
        Password,
        Created,
        Modified
         FROM  
         user
         Where  
         (Name='$this->Name' OR
         Email='$this->Email' OR
         ContactNumber='$this->ContactNumber') AND 
         Password='$this->Password'
         ;";

        $select1 = $this->connection->query($select);
        return $select1;
    }
   //insert data
    public function insertdata()
    {
        $datetime =date('Y-m-d H:i:s');
        $select = "INSERT INTO `user` 
        (
        Name,
        Email,
        ContactNumber,
        Password,
        Created,
        Modified
        ) 
        VALUES 
       (
            '$this->Name',
            '$this->Email',
            '$this->ContactNumber',
            '$this->Password',
            '$datetime',
            '$datetime'
       );";
        $select1 = $this->connection->query($select);
        return $select1;
    }
    //update data
    public function updatedata($pk)
    {

        $datetime =date('Y-m-d H:i:s');
        $select = "UPDATE user 
        SET 
        Name='$this->Name',
        Email='$this->Email',
        ContactNumber= '$this->ContactNumber',
        Password='$this->Password',
        Modified='$datetime'
         WHERE 
         UserID=$pk";

        $select1 = $this->connection->query($select);
       
        return $select1;
    }
    //delete data
    public function delete($pk)
    {
       echo  $select = "DELETE FROM 
        user WHERE
        `UserID` = $pk";

        $select1 = $this->connection->query($select);
        return $select1;
    }


}
