
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Programming School</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.0/css/all.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/course.css">

</head>

<body>
<!------->

<header>
    <h2><a href="index.html">
            <img class="logo" src="assets/img/code-school.png">
        </a></h2>
    <nav>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Course</a></li>
        <li><a href="aboutus.php">About</a></li>
        <li><a href="login.php">Login</a></li>
    </nav>
</header>


<section class="features">
		<h3 class="title">Kurset qe ne i ofrojme</h3>
		<p>Shkolla jone kryesisht eshte e fokusuar ne kurset per zhvillimin e uebit!</p>
		<hr>

		<ul class="grid">
			<?php
			
			include_once '../Repository/CourseRepository.php';
			$CourseRepository=new CourseRepository();
			$courses=$CourseRepository->getAllCourses();
			foreach($courses as $course){
				
				echo
				"
				<li>
				<i class=$course[Picture_Desc]></i>
				<h4>$course[Product_name]</h4>
				<p>$course[Product_description]</p>
				<p>$course[Product_price]</p>
			</li>
			";
			}
			?>
			
		</ul>
			
			
		
	</section>

</body>
</html>




