<?php
include_once '../Models/user.php';
include_once '../Repository/UserRepository.php';


if(isset($_POST['SignUpBtn'])){
    if(empty($_POST['name'])||empty($_POST['surname'])||empty($_POST['email'])||empty($_POST['password'])){
        echo "Please fill all fields";
    }else{
        
        $name = $_POST['name'];
        $surname=$_POST['surname'];
        $email=$_POST['email'];
        $password=$_POST['password'];

        $userRepository=new UserRepository();
        
        $users=$userRepository->getAllUsers();
        $i=1;
        foreach($users as $user){
            $i++;
            if($email == $user['Email']){
               
                
                echo"Can't use this email!";
                exit();
            }
            else if($i-1==sizeOf($users)){
                
                $usernew= new user($i,$name,$surname,$email,$password,0);
                $userRepository->insertUser($usernew);
                header("location:LogIn.php");
            } 
        }

    }
}

?>