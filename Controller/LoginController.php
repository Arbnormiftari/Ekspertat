<?php
include_once '../Models/user.php';
include_once '../Repository/UserRepository.php';

if(isset($_POST['LogInBtn'])){
    if(empty($_POST['email'])||empty($_POST['password'])){
        echo "Please fill all fields";
    }else{
        
        $email=$_POST['email'];
        $password=$_POST['password'];

        $userRepository=new UserRepository();

        $users=$userRepository->getAllusers();
        $i=0;
        //go to login
        foreach($users as $user){
            $i++;
            if($email == $user['Email'] && $password == $user['Password']){
                //session code
                session_start();
                $_SESSION['Email']=$email;
                $_SESSION['Password']=$password;
                $_SESSION['Admin']=$user['Admin'];
                $_SESSION['User_ID']=$user['User_ID'];
                //session code
                header("location:Account.php");
                exit();
            }
            else if($i==sizeOf($users)){
                echo"This user doesnt exist!";
                exit();
            } 
        }
    }
}

?>