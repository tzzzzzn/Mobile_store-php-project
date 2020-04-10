<!DOCTYPE html>
<html>
    <title>
        iPhone page
    </title>
    <style>
.topnav {
  overflow: hidden;
  background-color: #262626;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav-right {
  float: right;
}
        
</style>
    <body  style=" margin: 0;">
    <div class="topnav">
          <a href="home.php">Home</a>
          <a  href="#Moto">Moto</a>
          <a href="redmi.php">Redmi</a>
          <a href="oneplus.php">OnePlus</a>
          <a class="active" href="iphone.php">iphone</a>
          <a href="nokia.php">Nokia</a>
          <a href="samsung.php">Samsung</a>
          <div class="topnav-right">
            <?php
              session_start();
               if(!isset($_SESSION['uname']))
               {
                   //echo $uname;
                   echo '<a href="signup_form.php">SignUp</a>';
                   echo '<a href="login_form.php">Login</a>';
               }
              else
              { 
                echo '<a href="profile.php">'.$_SESSION['uname'].'</a>';
              }   
            ?>
          </div>
    </div>
      <form method="post" action="checkout.php">
       <table align="center">
           <tr>
               
           <td style="padding:0px 0px 0px 100px">
            <div>
                <a href="#"><img style="height: 215px;
                width: <0%>;
                padding:0px 0px 0px 0px" 
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTE0yPNQKzAz30aB0IKpQoi88j2uEdNGics1UX3btswvVUu-8fX&usqp=CAU"></a><br>
                 <p style="padding:0px 0px 0px 0px"><input type="submit" style="background-color:#262626;color: white;padding:10px 10px 10px 10px;text-align:center;text-decoration: none; border-radius:40px;display: inline-block;" value="Apple iphone 11 Pro4gb/64gb) Rs:1,09,700/-" name="item"> 
            </div>
            </td>
            <td style="padding:0px 0px 0px 100px">
            <div>
                <a href="#"><img style="height: 215px;
                width: <0%></5>0%;
                padding:10px 0px 0px  10px"                    
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTW5btQDVMnVjlgnymyEFzbUbK3PU4_gUZwGextlJ4jNqlu0gb4&usqp=CAU"></a>
                <input type="submit" style="background-color:#262626;color: white;padding: 10px 10px 10px 10px;text-align: center;text-decoration: none; border-radius:40px;display: inline-block;" value="Apple iphone 11 (4gb/64gb) Rs:65,999/-" name="item"> 
            </div>
            </td>
            <td style="padding:0px 0px 0px 100px">
            <div>
                <a href="#"><img style="height: 215px;
                width: <0%>;
                padding:px 0px 0px 10px" 
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQraS4IGfAJfctB9DLodoFrE0YPFI3ZiKmzKEbNhhtmBcsRookR&usqp=CAU"></a>
                <input type="submit" style="background-color:#262626;color: white;padding: 10px 10px 10px 10px;text-align: center;text-decoration: none; border-radius:40px;display: inline-block;"value="Apple iphone 11 Pro Max(4gb/64gb) Rs:1,50,999/-"name="item">
            </div>
            </td>
        </tr>
        <tr>
               
           <td style="padding:0px 0px 0px 100px">
            <div>
                <a href="#"><img style="height: 215px;
                width: 70%;
                padding:10px 0px 0px 0px" 
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTxUUqjyxJyRFVhd2SUBIwn_ZJKRP5e8apqkL1lv0AQXabmE5mR&usqp=CAU"></a>
                <input type="submit" style="background-color: #262626;color: white;padding: 10px 10px 10px 10px;text-align: center;border-radius:40px;text-decoration: none;display: inline-block;"value="Apple iphone 10 (4gb/64gb) Rs:50,999/-" name="item">
            </div>
            </td>
            <td style="padding:0px 0px 0px 100px">
            <div>
                <a href="#"><img style="height: 215px;
                width: 70%;
                padding:10px 0px 0px 0px" 
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcStnRPqFAf1qdbhSsD_dZqeWO1EuR0SUcU7D3u7vWW5Z4cUQ5qS&usqp=CAU"></a>
                <input type="submit"style="background-color:#262626;color: white;padding: 10px 10px 10px 10px;text-align: center;text-decoration: none;border-radius:40px;display: inline-block;"value="Moto One Vision(4gb/128gb) Rs:14,999/-" name="item">
            </div>
            </td>
            <td style="padding:0px 0px 0px 100px">
            <div>
                <a href="#"><img style="height: 215px;
                width: 80%;
                padding:10px 0px 0px 10px" 
                src="https://thumbor.forbes.com/thumbor/960x0/https%3A%2F%2Fblogs-images.forbes.com%2Fjaymcgregor%2Ffiles%2F2019%2F01%2FMotorola-Razr-v4.jpg"></a>
                <input type="submit"style="background-color:#262626;color: white;padding: 10px 10px 10px 10px;text-align: center;text-decoration: none;border-radius:40px;display: inline-block;" name="item" value="Motorola Razr(6gb/128gb) Rs:1,49,999/-">
            </div>
            </td>
        </tr>    
        </table>
        </form>
    </body>
</html>