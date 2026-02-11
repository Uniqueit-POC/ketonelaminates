<?php

include_once __DIR__.'/../dbconnect.php';





class feedback extends dbconnect

{

    public $FeedbackID;

    public $Name;

    public $Email;

    public $ContactNumber;

    public $Subject;

    public $Description;

    public $Created;

    //select all data

    public function selectalldata()

    {

        $select = "SELECT 

        FeedbackID,

        Name,

        Email,

        ContactNumber,

        Subject,

        Description,

        Created



         FROM  

         feedback
         Order By FeedbackID DESC

         ";



        $select1 = $this->connection->query($select);

        return $select1;

    }

    //select by pk

    public function selectbypk($pk)

    {

        $select = "SELECT 

        FeedbackID,

        Name,

        Email,

        ContactNumber,

        Subject,

        Description,

        Created



         FROM  

         feedback

         Where  FeedbackID=$pk;";



        $select1 = $this->connection->query($select);

        return $select1;

    }

   //insert data

    public function insertdata()

    {

        include  __DIR__.'/../Mail/sendmail.php';

        $datetime =date('Y-m-d H:i:s');

        $select = "INSERT INTO `feedback` 

        (

            Name,

            Email,

            ContactNumber,

            Subject,

            Description,

            Created

        ) 

        VALUES 

       (

            '$this->Name',

            '$this->Email',

            '$this->ContactNumber',

            '$this->Subject',

            '$this->Description',

            '$datetime'



       );";

        $select1 = $this->connection->query($select);
        $body ='Name : <strong>'.$this->Name.'</strong><br/>
                Query Email :<a href="mailto:'.$this->Email.'"> <strong>'.$this->Email.'</strong></a><br />
                Query ContactNumber :<a href="tel:'.$this->ContactNumber.'"> <strong>'.$this->ContactNumber.'</strong></a><br /><br /><br /><br />
                &nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;'.$this->Description.'<br /><br /><br />
                <strong>Powered By Unique it Solution <strong>';
               
        $headers = 'From: '.$email;

        smtp_mailer("info@ketonelaminates.com",$this->Subject,$body);
      

        return $select1;

    }

    //update data

    public function updatedata($pk)

    {

        $datetime =date('Y-m-d H:i:s');

        $select = "UPDATE `feedback` 

        SET 

            Name='$this->Name',

            Email='$this->Email',

            ContactNumber='$this->ContactNumber',

            Subject= '$this->Subject',

            Description='$this->Description'

            WHERE 

            `FeedbackID`=$pk";



        $select1 = $this->connection->query($select);

        return $select1;

    }

    //delete data

    public function delete($pk)

    {

        $select = "DELETE FROM 

        feedback WHERE

        `FeedbackID` = $pk";



        $select1 = $this->connection->query($select);

        return $select1;

    }





}

