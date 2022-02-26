<?php

class user{
    private $User_Id;
    private $Name;
    private $Surname;
    private $Email;
    private $Password;
    private $Admin;

    function __construct($User_Id,$Name,$Surname,$Email,$Password,$Admin){
        $this->User_Id=$User_Id;
        $this->Name=$Name;
        $this->Surname=$Surname;
        $this->Email=$Email;
        $this->Password=$Password;
        $this->Admin=$Admin;
    }

    function getId(){
        return $this->User_Id;
    }
    function getName(){
        return $this->Name;
    }
    function getSurname(){
        return $this->Surname;
    }
    function getEmail(){
        return $this->Email;
    }
    function getPassword(){
        return $this->Password;
    }
    function getAdmin(){
        return $this->Admin;
    }


}

?>