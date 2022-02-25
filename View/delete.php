<?php

include_once '../Repository/UserRepository.php';

$id=$_GET['ID'];
$UserRepository=new UserRepository();
$UserRepository->deleteUserByID($id);

header("location:Dashboard.php");

?>