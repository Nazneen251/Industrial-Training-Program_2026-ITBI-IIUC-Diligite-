<?php
       include('../function.php');
    session_start();
    $btn =  test_user($_POST['submit']);
    $name = test_user($_POST['name']);
    $email = test_user($_POST['email']);
    $phone = test_user($_POST['phone']);
    $description = test_user($_POST['description']);
    $experience = test_user($_POST['experience']);
    $project = test_user($_POST['project']);
    $profile_image = $_POST['profile_iamge'];

    if(isset($btn)){
        if(empty($name)) {
            $_SESSION['name_err'] = 'Name is required';
            header("location: ../index.php");
        } elseif(!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $_SESSION['name_err'] = "Only letters and white space allowed";
            header("location: ../index.php");
        }
        if(empty($email)){
            $_SESSION['email_err'] = 'Email is required';
            header("location: ../index.php");
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['email_err'] = "Invalid email format";
            header("location: ../index.php");
        }
    }
?>
