<?php
include_once __DIR__.'/../dbconnect.php';
class product extends dbconnect
{
    public $ProductID;
    public $Name;
    public $MetaKeywords;
    public $Description;
    public $Created;
    public $Modified;
    public $UserID;
    public $Sequence;

   //select all data
    public function selectalldata()
    {
        $select = "SELECT 
        ProductID,
        Name,
        MetaKeywords,
        Description,
        Created,
        Modified,
        UserID,
        Sequence

         FROM  
         product
         ";

        $select1 = $this->connection->query($select);
        return $select1;
    }
    //select by pk
    public function selectbypk($pk)
    {
        $select = "SELECT 
        ProductID,
        Name,
        MetaKeywords,
        Description,
        Created,
        Modified,
        UserID,
        Sequence

         FROM  
         product
         Where  ProductID=$pk;";

        $select1 = $this->connection->query($select);
        return $select1;
    }
   //insert data
    public function insertdata()
    {
        $datetime =date('Y-m-d H:i:s');
        
        $select = "INSERT INTO `product` 
        (
        Name,
        MetaKeywords,
        Description,
        Created,
        Modified,
        UserID,
        Sequence
        ) 
        VALUES 
       (
            '$this->Name',
            '$this->MetaKeywords',
            '$this->Description',
            '$datetime',
            '$datetime',
            '$this->UserID',
            '$this->Sequence'


       );";
        $select1 = $this->connection->query($select);
        return $select1;
    }
    //update data
    public function updatedata($pk)
    {
        $datetime =date('Y-m-d H:i:s');
        $select = "UPDATE `product` 
        SET 
        Name='$this->Name',                
        MetaKeywords='$this->MetaKeywords',       
        Description='$this->Description',
        Modified='$datetime',
        UserID='$this->UserID',
        Sequence='$this->Sequence'

        WHERE 
        `ProductID`=$pk";

        $select1 = $this->connection->query($select);
        return $select1;
    }
    //delete data 
    public function delete($pk)
    {
    
        $select = "DELETE FROM 
        product WHERE
        `ProductID` = $pk";
       


        $select1 = $this->connection->query($select);
      
        return $select1;
    }


}
