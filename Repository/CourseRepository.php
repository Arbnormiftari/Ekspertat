<?php

include '../Database/DatabaseConnection.php';

class courseRepository{
    private $connection;

    function __construct(){
        $conn=new DBConnection();
        $this->connection=$conn->startConnection();
    }

    function insertCourse($course){
        $conn=$this->connection;

        $id=$course->getId();
        $name=$course->getName();
        $price=$course->getPrice();
        $description=$course->getDescription();
        $image=$course->getImage();

        $sql="INSERT INTO courses (Product_ID,Product_name,Product_price,Product_description,Picture_Desc) VALUES (?,?,?,?,?)";
        $statement=$conn->prepare($sql);
        $statement->execute([$id,$name,$price,$description,$image]);
        echo "<script>alert('Course has been inserted succesfully!')</script>";
    }
    function getAllCourses(){
        $conn=$this->connection;

        $sql= "SELECT * FROM courses";

        $statement= $conn->query($sql);
        $courses = $statement->fetchAll();
        return $courses;
    }
    function getCourseByID($id){
        $conn=$this->connection;

        $sql="SELECT * FROM courses Where Product_ID='$id' ";

        $statement=$conn->query($sql);

        $course=$statement->fetch();

        return $course;

    }
    function updateCourse($Product_name,$Product_price,$Product_description,$Picture_Desc,$Product_ID){

        $conn=$this->connection;

        $sql="UPDATE courses SET Product_name=?,Product_price=?,Product_description=?,Picture_Desc=? where Product_ID=?";

        $statement=$conn->prepare($sql);

        $statement->execute([$Product_name,$Product_price,$Product_description,$Picture_Desc,$Product_ID]);
        echo "<script>alert('Course has been updated succesfully!')</script>";
    }
    function deleteCourseByID($Product_ID){
        $conn=$this->connection;

        $sql=" DELETE FROM courses WHERE Product_ID=?";
        $statement=$conn->prepare($sql);
        $statement->execute([$Product_ID]);
        echo "<script>alert('Course has been deleted succesfully!')</script>";
    }
}

?>