<?php

    $email = filter_var($_POST['uemail'], FILTER_SANITIZE_EMAIL);
    if(filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        include("connectdb.php");
        $password=filter_var($_POST['upassword'], FILTER_SANITIZE_STRING);
        $sql="select * from user where u_email='".$email."';";
        $pass=mysqli_query($connect,$sql);
        $row = mysqli_fetch_assoc($pass);
        $pass=$row['u_password'];
        if($pass==$password)
        {
           
            session_start();
            $_SESSION['uname']=$row['u_name'];
            $_SESSION['uemail']=$row['u_email'];
            $_SESSION['ugender']=$row['u_gender'];
            $_SESSION['umobile']=$row['u_mobile'];
            $_SESSION['upass']=$row['u_password'];
            include("home.php");
        }
        else
            include("login_form_wrong_password.php");
    }
    else
        include("login_form_wrong_password.php");
    
?>