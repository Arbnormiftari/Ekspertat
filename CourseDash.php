
<?php
session_start();
if(!isset($_SESSION['Email'])){
    header("location:LogIn.php");
}else{
    if($_SESSION['Admin']!=1){
        header("location:Account.php");
    }else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <!-- fotoja -->
            <th>ID</th>
            <th>Emri</th>
            <th>Qmimi</th>
            <th>Pershkrimi</th>
            <th>Image</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
            include_once '../Repository/CourseRepository.php';
            $courseRepository =new courseRepository();
            $courses = $courseRepository->getAllCourses();
            foreach($courses as $course){
                echo
                "
                <tr>
                
                    <td>$course[Product_ID]</td>
                    <td>$course[Product_name]</td>
                    <td>$course[Product_price]</td>
                    <td>$course[Product_description]</td>
                    <td>$course[Picture_Desc]</td>
                    <td><a href='editCourse.php?ID=$course[Product_ID]'>Edit</a></td>
                    <td><a href= 'deleteCourse.php?ID=$course[Product_ID]'>Delete</a></td>
                </tr>
                ";
                
            }
            
        ?>
    </table>
    
    <a href="addCourse.php">
    <input type="button" value="Add" />
    </a>
    
</body>
</html>
<?php
    }
}
?>