<?php
include_once '../Repository/UserRepository.php';

$userId=$_GET['ID'];

$UserRepository=new UserRepository();

$user=$UserRepository->getUserByID($userId);

?>
<form action="" method="POST">

    <input type="number" name="ID" value="<?=$user['User_ID']?>" readonly><br><br>
    <input type="text" name="Name" value="<?=$user['Name']?>"><br><br>
    <input type="text" name="Surname" value="<?=$user['Surname']?>"><br><br>
    <input type="text" name="Email" value="<?=$user['Email']?>"><br><br>
    <input type="text" name="Password" value="<?=$user['Password']?>"><br><br>
    <input type="number" name="Admin" value="<?=$user['Admin']?>"><br><br>

    <input type="submit" name="save" value="save"><br><br>

</form>

<?php

if(isset($_POST['save'])){
    $id=$userId;
    $name=$_POST['Name'];
    $surname=$_POST['Surname'];
    $email=$_POST['Email'];
    $password=$_POST['Password'];
    $admin=$_POST['Admin'];

    $UserRepository->updateUser($id,$name,$surname,$email,$password,$admin);
    header("location:Dashboard.php");
}

?>