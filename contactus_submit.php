<?php
require 'includes/common.php';
$name = mysqli_real_escape_string($con,$_POST['name']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$message= mysqli_real_escape_string($con,$_POST['message']);
$regex_name="/^([a-zA-Z']+)$/";
if(!preg_match($regex_name, $name)){
    header('location:contact.php?name_error=enter valid name');
}
$regex_email="/^[_a-z0-9]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if(!preg_match($regex_email, $email)){
    header('location:contact.php?email_error=enter valid email');
}



   $user_query="INSERT INTO contact(name,email,message) VALUES ('$name','$email','$message')";
   $user_result= mysqli_query($con, $user_query)
            or die(mysqli_error($con));
   header('location: index.php');
?>   




