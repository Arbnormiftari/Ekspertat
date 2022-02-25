<?php

include '../Database/DatabaseConnection.php';
class UserRepository{
    private $connection;

    function __construct(){
        $conn=new DBConnection;
        $this->connection = $conn->startConnection();
    }

    function insertUser($user){
        $conn=$this->connection;
        
        $id = $user->getId();
        $name = $user->getName();
        $surname = $user->getSurname();
        $email = $user->getEmail();
        $password = $user->getPassword();
        $admin=$user->getAdmin();

        $sql = "INSERT INTO users (User_ID,Name,Surname,Email,Password,Admin) VALUES (?,?,?,?,?,?)";
        $statement = $conn->prepare($sql);
        $statement->execute([$id,$name,$surname,$email,$password,$admin]);
        echo "<script>alert('User has been inserted succesfully!')</script>";
    }
    function getAllUsers(){
        $conn=$this->connection;

        $sql= "SELECT * FROM users";

        $statement= $conn->query($sql);
        $users = $statement->fetchAll();
        return $users;
    }
    function getUserByEmail($Email){
        $conn=$this->connection;
        $sql="SELECT * FROM users Where Email='$Email' ";
        $statement=$conn->query($sql);
        $user=$statement->fetch();
        return $user;
    }

    function getUserByID($id){
        $conn=$this->connection;

        $sql="SELECT * FROM users Where User_ID='$id' ";

        $statement=$conn->query($sql);

        $user=$statement->fetch();

        return $user;

    }

    function updateUser($User_ID,$name,$surname,$email,$password,$admin){

        $conn=$this->connection;

        $sql="UPDATE users SET Name=?,Surname=?,Email=?,Password=?,Admin=? where User_ID=?";

        $statement=$conn->prepare($sql);

        $statement->execute([$name,$surname,$email,$password,$admin,$User_ID]);
        echo "<script>alert('User has been updated succesfully!')</script>";
    }
    function deleteUserByID($User_ID){
        $conn=$this->connection;

        $sql=" DELETE FROM users WHERE User_ID=?";
        $statement=$conn->prepare($sql);
        $statement->execute([$User_ID]);
        echo "<script>alert('User has been deleted succesfully!')</script>";
    }
    function insertUserCourse($user,$course){
        $conn=$this->connection;

        $idUser=$user->getId();
        $idCourse=$course->getId();
        //$name=$course->getName();
        //$price=$course->getPrice();
        //$description=$course->getDescription();
        //$image=$course->getImage();

        $sql="INSERT INTO usercourse (User_ID,Product_ID) VALUES (?,?)";
        $statement=$conn->prepare($sql);
        $statement->execute([$idUser,$idCourse]);
        echo "<script>alert('CourseUser has been inserted succesfully!')</script>";
    }
    function getAllCourseUser($id){
        $conn=$this->connection;
        

        $sql= "SELECT * FROM courses c inner join
               usercourse uc ON
               c.Product_ID=uc.Product_ID
               where uc.User_ID='$id' ";

        $statement= $conn->query($sql);
        $courses = $statement->fetchAll();
        return $courses;
    }
    function getAllCoursesNotUser($user){
        $conn=$this->connection;
        $idUser=$user->getId();

        $sql= "SELECT * FROM courses c inner join
               usercourse uc ON
               c.Product_ID=uc.Product_ID
               where not uc.User_ID='$idUser'
        ";

        $statement= $conn->query($sql);
        $courses = $statement->fetchAll();
        return $courses;
    }
    function deleteCourseByID($Product_ID){
        $conn=$this->connection;

        $sql=" DELETE FROM courses WHERE Product_ID=?";
        $statement=$conn->prepare($sql);
        $statement->execute([$Product_ID]);
        echo "<script>alert('Course has been deleted succesfully!')</script>";
    }
}
//$userRepo= new UserRepository();
//$userRepo->insertUser();

?>