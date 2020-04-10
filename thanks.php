<?php
session_start();
echo "Thanks ".$_SESSION['uname']." for purchasing ".$_POST['sub'];

?>