<?php
$connection = mysqli_connect('localhost','root','','form');

if(!$connection){
    
    die("Not Connected".mysqli_error($connection));
}
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    
    $sql="SELECT * FROM `registertable` where `Email`='$email' and `Password`='$password'";
    $result = mysqli_query($connection,$sql);
    if($result->num_rows>0){
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['email']=$row['email'];
        header("location: index.php");
    }
    else{
        echo "<script>alert('Incorrect Password');</script>";
      }
}