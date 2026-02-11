<?php
include_once __DIR__.'/../dbconnect.php';


class catlog extends dbconnect
{
    public $catlogID;
    public $Images;
    public $pdf;
    public $Created;
    //select all data
    public function selectalldata()
    {
        $select = "SELECT 
          *

         FROM  
         catlog
         ";

        $select1 = $this->connection->query($select);
        return $select1;
    }
    public function selectbypk($pk)
    {
        $select = "SELECT 
          *
         FROM  
         catlog
         where catlogID=$pk
         ";

        $select1 = $this->connection->query($select);
        return $select1;
    }
    
    
   //insert data
    public function insertdata()
    {
        $datetime =date('Y-m-d H:i:s');
        $select = "INSERT INTO `catlog` 
        (
            Images,
            pdf,
            Created
        ) 
        VALUES 
       (
            '$this->Images',
            '$this->pdf',
            '$datetime'
            


       );";
        $select1 = $this->connection->query($select);
        
       
        return $select1;
    }
   
    //delete data
    public function delete($pk)
    {
       
        $select = "DELETE FROM 
        catlog WHERE
        `catlogID` = $pk";
        $select1 = $this->connection->query($select);
        return $select1;
    }
    


}
