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
            <th>ID</th>
            <th>Emri</th>
            <th>Mbiemri</th>
            <th>Email</th>
            <th>Password</th>
            <th>Admin</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
            include_once '../Repository/UserRepository.php';
            $UserRepository =new UserRepository();
            $users = $UserRepository->getAllUsers();
            foreach($users as $user){
                echo
                "
                <tr>
                    <td>$user[User_ID]</td>
                    <td>$user[Name]</td>
                    <td>$user[Surname]</td>
                    <td>$user[Email]</td>
                    <td>$user[Password]</td>
                    <td>$user[Admin]</td>
                    <td><a href='edit.php?ID=$user[User_ID]'>Edit</a></td>
                    <td><a href= 'delete.php?ID=$user[User_ID]'>Delete</a></td>
                </tr>
                ";
                
            }

        ?>
    </table>
</body>
</html>
<?php
    }
}
?>