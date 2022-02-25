<?php
   
    session_start();
    $hide="";
    if(!isset($_SESSION['Email'])){
        header("location:LogIn.php");
    }
    else{
        if($_SESSION['Admin']==1){
            $hide="";
        }else{
            $hide="hide";
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .hide{
            display:none;
        }
    </style>
</head>
<body>
    <hi>Account</hi>
    <a href="LogOut.php">Log Out</a>
    <a href="Dashboard.php" class="<?=$hide?>">Dashboard</a>
    <a href="CourseDash.php" class="<?=$hide?>">CourseDashboard</a>
    <?php
            //include_once '../Repository/CourseUserRepository.php';
            include '../Repository/UserRepository.php';
            include_once '../Controller/LoginController.php';
            //$CourseUserRepository =new CourseUserRepo();
            $userRepository=new UserRepository();
            $id=$_SESSION['User_ID'];
            //$user=$userRepository->getUserByEmail($_SESSION['Email']);
            $courses= $userRepository->getAllCourseUser($id);
            foreach($courses as $course){
                echo
                "
                <tr>
                    <td>$course[Product_ID]</td>
                    <td>$course[Product_name]</td>
                    <td>$course[Product_price]</td>
                    <td>$course[Product_description]</td>
                    <td>$course[Picture_Desc]</td>
                    
                    
                </tr>
                ";
                
            }

        ?>
</body>
</html>
<?php
    }
?>