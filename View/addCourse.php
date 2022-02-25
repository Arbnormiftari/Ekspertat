<?php
include_once '../Repository/CourseRepository.php';
include_once '../Models/course.php';

//$userId=$_GET['ID'];

$CourseRepository=new courseRepository();

//$Course=$UserRepository->getUserByID($userId);

?>
<form action="" method="POST">

    <input type="number" name="ID" value=""><br><br>
    <input type="text" name="Name" value=""><br><br>
    <input type="number" name="Price" value=""><br><br>
    <input type="text" name="Description" value=""><br><br>
    <input type="text" name="Picture_Desc" value=""><br><br>

    <input type="submit" name="save" value="save"><br><br>

</form>

<?php

if(isset($_POST['save'])){
    $id=$_POST['ID'];
    $name=$_POST['Name'];
    $price=$_POST['Price'];
    $description=$_POST['Description'];
    $image=$_POST['Picture_Desc'];
    $course=new course($id,$name,$price,$description,$image);
    $CourseRepository->insertCourse($course);
    header("location:CourseDash.php");
}

?>