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
        include_once '../Repository/UserRepository.php';
        include_once '../Controller/LoginController.php';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.0/css/all.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/course.css">
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

    <h2>Courses that you have</h2>
    <ul class="grid">
        <?php
           
            //include_once '../Repository/UserRepository.php';
            //include_once '../Controller/LoginController.php';
            
            $userRepository=new UserRepository();
            $id=$_SESSION['User_ID'];
            
            $courses= $userRepository->getAllCourseUser($id);
            foreach($courses as $course){
                
                echo
				"
				<li>
				<i class=$course[Picture_Desc]></i>
				<h4>$course[Product_name]</h4>
				<p>$course[Product_description]</p>
				<p>$course[Product_price]</p>
                <a href='../Controller/CourseController.php?IDC=$course[Product_ID]'>Remove</a>
			</li>
			";
                
            }

        ?>
    </ul>
    <h2>Courses that you can purchase</h2>
    <ul class="grid">
        <?php
           
            //include_once '../Repository/UserRepository.php';
            //include_once '../Controller/LoginController.php';
            
            $userRepository=new UserRepository();
            $id=$_SESSION['User_ID'];
            
            $courses= $userRepository->getAllCoursesNotUser($id);
            foreach($courses as $course){
                
                echo
				"
				<li>
				<i class=$course[Picture_Desc]></i>
				<h4>$course[Product_name]</h4>
				<p>$course[Product_description]</p>
				<p>$course[Product_price]</p>
                <a href='../Controller/CourseController.php?IDC=$course[Product_ID]'>Purchase</a>
			</li>
			";
                
            }

        ?>
    </ul>
</body>
</html>
<?php
    }
?>