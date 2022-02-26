<?php

class course{

    private $courseID;
    private $courseName;
    private $coursePrice;
    private $courseDescription;
    private $courseImage;

    function __construct($courseID,$courseName,$coursePrice,$courseDescription,$courseImage){
        $this->courseID=$courseID;
        $this->courseName=$courseName;
        $this->coursePrice=$coursePrice;
        $this->courseDescription=$courseDescription;
        $this->courseImage=$courseImage;
    }

    function getId(){
        return $this->courseID;
    }
    function getName(){
        return $this->courseName;
    }
    function getPrice(){
        return $this->coursePrice;
    }
    function getDescription(){
        return $this->courseDescription;
    }
    function getImage(){
        return $this->courseImage;
    }
}

?>