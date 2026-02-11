<?php
include_once __DIR__.'/../dbconnect.php';
include_once __DIR__.'/unique.php';

class images extends dbconnect
{
    public $ImagesID;
    public $ProductID;
    public $Path;
    public $Description;
    public $Created;
    public $UserID;
    
    





    //select all data
    public function selectalldata()
    {
        $select = "SELECT 
        ImagesID,
        Path,
        ProductID,
        Description,
        Created,
        UserID

         FROM  
         images
         ";

        $select1 = $this->connection->query($select);
        return $select1;
    }
    //select by product id 
    public function selectbyproductid($pk)
    {
        $select = "SELECT 
        ImagesID,
        Path,
        ProductID,
        Description,
        Created,
        UserID
         FROM  
         images
         Where  ProductID=$pk;";

        $select1 = $this->connection->query($select);
        return $select1;
    }
    //select by pk
    public function selectbypk($pk)
    {
        $select = "SELECT 
        ImagesID,
        Path,
        ProductID,
        Description,
        Created,
        UserID
         FROM  
         images
         Where  ImagesID=$pk;";

        $select1 = $this->connection->query($select);
        return $select1;
    }
   //insert data
    public function insertdata()
    {
        $datetime =date('Y-m-d H:i:s');
        $select = "INSERT INTO `images` 
        (
            Path,
            ProductID,
            Description,
            Created,
            UserID
        ) 
        VALUES 
       (
            '$this->Path',
            '$this->ProductID',
            '$this->Description',
            '$datetime',
            '$this->UserID'


       );";
        $select1 = $this->connection->query($select);
        // $uniobj = new unique();
        // $uniobj->imageupload($this->Path);
       
        return $select1;
    }
    //update datas
    public function updatedata($pk)
    {
        $select = "UPDATE `images` 
        SET 
            Path='$this->Path',
            ProductID='$this->ProductID',
            Description='$this->Description',
            Created='$this->Created',
            UserID='$this->UserID',

            WHERE 
            `ImagesID`=$pk";

        $select1 = $this->connection->query($select);
        return $select1;
    }
    //delete data
    public function delete($pk)
    {
        $obj = new images();
        $result = $obj->selectbypk($pk);
        $row=mysqli_fetch_assoc($result);

        $name=$row['Path'];

        $select = "DELETE FROM 
        images WHERE
        `ImagesID` = $pk";
        $select1 = $this->connection->query($select);
        $uniobj = new unique();
        $uniobj->imagedelete($name);
        return $select1;
    }
    


}
