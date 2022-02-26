<?php
include_once '../Repository/CourseRepository.php';

$courseId=$_GET['ID'];

$CourseRepository=new courseRepository();

$course=$CourseRepository->getCourseByID($courseId);

?>
<form action="" method="POST">

    <input type="number" name="ID" value="<?=$course['Product_ID']?>"><br><br>
    <input type="text" name="Name" value="<?=$course['Product_name']?>"><br><br>
    <input type="number" name="Price" value="<?=$course['Product_price']?>"><br><br>
    <input type="text" name="Description" value="<?=$course['Product_description']?>"><br><br>
    <input type="text" name="Image" value="<?=$course['Picture_Desc']?>"><br><br>

    <input type="submit" name="save1" value="save"><br><br>

</form>

<?php

if(isset($_POST['save1'])){
    $id=$_POST['ID'];
    $name=$_POST['Name'];
    $price=$_POST['Price'];
    $description=$_POST['Description'];
    $image=$_POST['Image'];

    $CourseRepository->updateCourse($name,$price,$description,$image,$id);
    header("location:CourseDash.php");
}

?>