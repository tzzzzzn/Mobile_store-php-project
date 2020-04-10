<!DOCTYPE html>
<html>
    <title>
        Home page
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
          <a  href="moto.php">Moto</a>
          <a href="redmi.php">Redmi</a>
          <a href="oneplus.php">OnePlus</a>
          <a href="iphone.php">iphone</a>
          <a href="nokia.php">Nokia</a>
          <a class="active" href="samsung.php">Samsung</a>
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
       <table align="center">
           <tr>
               
           <td style="padding:0px 100px 0px 100px">
            <div>
                <a href="#"><img style="height: 215px;
                width: <100%>;
                padding:0px 0px 0px 0px" 
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQAKspTdFUQlrA6qo2ccZ_u9tgPhqOft4bv6tWhTbC-12xJxZIj&usqp=CAU"></a>
                 <p style="padding:0px 0px 0px 0px"><a href="#" style="background-color:#262626;color: white;padding:10px 10px 10px 10px;text-align:center;text-decoration: none; border-radius:40px;display: inline-block;"target="_blank">Samsung Galaxy S9(4gb/64gb) Rs:28,400/-</a></p>
            </div>
            </td>
            <td style="padding:0px 100px 0px 100px">
            <div>
                <a href="#"><img style="height: 215px;
                width: <50%></5>0%;
                padding:10px 0px 0px  10px"                   
                 src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS0CJerNVVDaXkpxdUKEzieWW6huvbifMilZ7vLCa-Zp3tKp-gx&usqp=CAU"></a>
                <p ><a href="#" style="background-color:#262626;color: white;padding: 10px 10px 10px 10px;text-align: center;text-decoration: none; border-radius:40px;display: inline-block;"target="_blank">Samsung Galaxy S9 Plus(6gb/64gb) Rs:31,699/-</a></p>
            </div></a></p>
            </div>
            </td>
            <td style="padding:0px 100px 0px 100px">
            <div>
                <a href="#"><img style="height: 215px;
                width: <80%>;
                padding:px 0px 0px 10px" 
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT2LECz9wKBHDAqE61j5n-DO924G_ZEWkK0-_52WaFpXStxVK5F&usqp=CAU"></a>
                <p><a href="#"><a href="#" style="background-color:#262626;color: white;padding: 10px 10px 10px 10px;text-align: center;text-decoration: none; border-radius:40px;display: inline-block;"target="_blank">Samsung Galaxy A50(4gb/64gb) Rs:15,899/-</a></p>
            </div></a></p>
            </div>
            </td>
        </tr>
        <tr>
               
           <td style="padding:0px 100px 0px 100px">
            <div>
                <a href="#"><img style="height: 215px;
                width: 70%;
                padding:10px 0px 0px 0px" 
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTxUUqjyxJyRFVhd2SUBIwn_ZJKRP5e8apqkL1lv0AQXabmE5mR&usqp=CAU"></a>
                <p><a href="#" style="background-color: #262626;color: white;padding: 10px 10px 10px 10px;text-align: center;border-radius:40px;text-decoration: none;display: inline-block;"target="_blank">Moto One Action(4gb/64gb) Rs:11,999/-</a></p>
            </div>
            </td>
            <td style="padding:0px 100px 0px 100px">
            <div>
                <a href="#"><img style="height: 215px;
                width: 70%;
                padding:10px 0px 0px 0px" 
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcStnRPqFAf1qdbhSsD_dZqeWO1EuR0SUcU7D3u7vWW5Z4cUQ5qS&usqp=CAU"></a>
                <p><a href="#" style="background-color:#262626;color: white;padding: 10px 10px 10px 10px;text-align: center;text-decoration: none;border-radius:40px;display: inline-block;"target="_blank">Moto One Vision(4gb/128gb) Rs:14,999/-</a></p>
            </div>
            </td>
            <td style="padding:0px 100px 0px 100px">
            <div>
                <a href="#"><img style="height: 215px;
                width: 80%;
                padding:10px 0px 0px 10px" 
                src="https://thumbor.forbes.com/thumbor/960x0/https%3A%2F%2Fblogs-images.forbes.com%2Fjaymcgregor%2Ffiles%2F2019%2F01%2FMotorola-Razr-v4.jpg"></a>
                <p><a href="#" style="background-color:#262626;color: white;padding: 10px 10px 10px 10px;text-align: center;text-decoration: none;border-radius:40px;display: inline-block;"target="_blank">Motorola Razr(6gb/128gb) Rs:1,49,999/-</a></p>
            </div>
            </td>
        </tr>    
        </table>
    </body>
</html>