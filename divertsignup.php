<?php

    if($_GET['upassword']==$_GET['uRepassword'])
    {
        
//        include("checkout.php");
        include("connectdb.php");
        $name=$_GET['uname'];
        
        $email=$_GET['uemail'];
        
        $gender=$_GET['gender'];
        
        $mobile=$_GET['umobile'];
        
        $password=$_GET['upassword'];
        
        $sql="INSERT INTO user(u_name,u_email,u_gender,u_mobile,u_password) values('".$name."','".$email."','".$gender."','".$mobile."','".$password."');";
        if(mysqli_query($connect,$sql))
        {
            
            include("login_form.php");
        }
        else
            echo "insertion failed";
        
    }
    else
        include("signup_form_wrong_password.php");
?>
