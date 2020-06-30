<?php
    require 'includes/common.php';
    if (!isset($_SESSION['email'])) 
    { header('location: index.php');}
    $password= mysqli_real_escape_string($con,$_POST['oldpassword']);
    $encrypted_password=md5($password);
    $new_password=mysqli_real_escape_string($con,$_POST['newpassword']);
    $encrypted_password1=md5($new_password);
    $retype_password=mysqli_real_escape_string($con,$_POST['retypepassword']);
    if(strlen($new_password)!= strlen($retype_password)){
        echo 'passwords not same';
    }
    $select_query="SELECT id,password FROM users WHERE password='$encrypted_password'";
    $select_query_result= mysqli_query($con, $select_query);
    $rows_fetched= mysqli_num_rows($select_query_result);
    if($rows_fetched>0){
        if($new_password==$retype_password){
            $update_query="UPDATE users SET password='$encrypted_password1' WHERE password='$encrypted_password'";
            $update_result= mysqli_query($con , $update_query);
            header('location: home1.php');
        }
        else{
            
            header('location: setting.php?error=incorrect confirm password');
        }
        
    }
    else{
        
        header('location: setting.php?final_error=enter correct password');
        
    }
        
    ?>
