<?php
$connection = mysqli_connect('localhost','root','','form');

if(!$connection){
    
    die("Not Connected".mysqli_error($connection));
}

if(isset($_POST['apply'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $id=$_POST['id'];
    $phone=$_POST['phone'];
    $language=$_POST['language'];
    $gender=$_POST['gender'];
    $password=$_POST['password'];

    $checkemail="SELECT * FROM registertable where Email='$email'";
    $result = mysqli_query($connection,$checkemail);

    if($result->num_rows>0)
    {
        echo "Email Address Already Exists!";
    }
    else{
        $query = "INSERT INTO registertable (Name, Email, Id, PhoneNumber, Gender, Language, Password) VALUES ('$name', '$email', '$id', '$phone',  '$gender', '$language', '$password')";
      $result = mysqli_query($connection,$query);
      if($result){
        header('location: index.php');
      }
}
}
?>