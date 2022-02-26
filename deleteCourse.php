<?php

include_once '../Repository/CourseRepository.php';

$id=$_GET['ID'];
$CourseRepository=new CourseRepository();
$CourseRepository->deleteCourseByID($id);

header("location:CourseDash.php");

?>