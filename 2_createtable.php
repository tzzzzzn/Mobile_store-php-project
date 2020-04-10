<?php
    
    $server='localhost';
    $username='root';
    $password='';
    $database='db';
    //lets create a connection to database 
    $connec=mysqli_connect($server,$username,$password,$database);
    if($connec)
    {
        $sql='CREATE TABLE user
        (
        u_id INT(6) AUTO_INCREMENT PRIMARY KEY,
        u_name VARCHAR(30),
        u_email VARCHAR(30),
        u_gender VARCHAR(6),
        u_mobile VARCHAR(15),
        u_password VARCHAR(15)
        )';
        if(mysqli_query($connec,$sql))
            echo 'user table created successfully';
        else
            echo 'error in creating table';
    }
    else
        echo "error in creating database";

?>