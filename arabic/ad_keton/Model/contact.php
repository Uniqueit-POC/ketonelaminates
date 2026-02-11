<?php

include_once __DIR__.'/../dbconnect.php';

class contact extends dbconnect

{

    public $ContactID;

    public $ContactNumber1;

    public $ContactNumber2;

    public $Email;

    public $FacebookLink;

    public $InstagramLink;

    public $WhatsAppLink;

    public $Address;

    public $GoogleMapLink;

    public $UserID;



  //select all data

    public function selectalldata()

    {

        $select = "SELECT 

        ContactID,

        ContactNumber1,

        ContactNumber2,

        Email,

        FacebookLink,

        InstagramLink,

        WhatsAppLink,

        Address,

        GoogleMapLink,

        UserID



        FROM  

         contact

         ";



        $select1 = $this->connection->query($select);

        return $select1;

    }

    //select by pk

    public function selectbypk($pk)

    {

        $select = "SELECT 

        ContactID,

        ContactNumber1,

        ContactNumber2,

        Email,

        FacebookLink,

        InstagramLink,

        WhatsAppLink,

        Address,

        GoogleMapLink,

        UserID



         FROM  

         contact

         Where  ContactID=$pk;";



        $select1 = $this->connection->query($select);

        return $select1;

    }

   //insert data

    public function insertdata()

    {

        $select = "INSERT INTO `contact` 

        (

            ContactNumber1,

            ContactNumber2,

            Email,

            FacebookLink,

            InstagramLink,

            WhatsAppLink,

            UserID

        ) 

        VALUES 

       (

            '$this->ContactNumber1',

            '$this->ContactNumber2',

            '$this->Email',

            '$this->FacebookLink',

            '$this->InstagramLink',

            '$this->WhatsAppLink',

            '$this->UserID'



       );";

        $select1 = $this->connection->query($select);

        return $select1;

    }

    //update data

    public function updatedata($pk)

    {

        $select = "UPDATE `contact` 

        SET 

            ContactNumber1='$this->ContactNumber1',

            ContactNumber2='$this->ContactNumber2',

            Email='$this->Email',

            FacebookLink='$this->FacebookLink',

            InstagramLink='$this->InstagramLink',

            WhatsAppLink='$this->WhatsAppLink',

            GoogleMapLink ='$this->GoogleMapLink',

            Address ='$this->Address',


            UserID='$this->UserID'

            WHERE 

            `ContactID`=$pk";



        $select1 = $this->connection->query($select);
       
        return $select1;

    }



}

