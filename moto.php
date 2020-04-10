<!DOCTYPE html>
<html>
    <title>
        Moto page
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
  padding: 7px 14px 7px 16px;
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
          <a class="active" href="#Moto">Moto</a>
          <a href="redmi.php">Redmi</a>
          <a href="oneplus.php">OnePlus</a>
          <a href="iphone.php">iphone</a>
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
      <form method="post" action='checkout.php'>
       <table align="center" method="post">
           <tr>
               
           <td style="padding:0px 0px 0px 50px">
            <div>
                <a href="checkout.php"><img style="height: 215px;
                width: <70%>;
                padding:10px 0px 0px 0px;" 
                src="https://fdn2.gsmarena.com/vv/pics/motorola/motorola-one-macro-1.jpg"></a><br>
                 <input type="submit" style="background-color:#262626;color: white;padding:10px 10px 10px 10px;text-align:center;text-decoration: none; border-radius:40px;display: inline-block;" name='item'value='Macro(4gb/64gb) Rs:9,499/-'>
            </div>
            </td>
            <td style="padding:10px 0px 0px 50px">
            <div>
                <a href="checkout.php"><img style="height: 215px;
                width: <50%>;
                padding:0px 0px 0px  0px"                    src="https://abbelectronics.us/EbayTemplate2018/img/4f8cb703e9983cdf30e7ab809196f054.jpg"></a><br>
                <input type="submit" style="background-color:#262626;color: white;padding: 10px 10px 10px 10px;text-align: center;text-decoration: none; border-radius:40px;display: inline-block;"value="Moto E6s(4gb/64gb) Rs:7,499/-" name="item">
            </div>
            </td>
            <td style="padding:10px 0px 0px 50px">
            <div>
                <a href="checkout.php"><img style="height: 215px;
                width: <80%>;
                padding:0px 0px 0px 0px" 
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQkEFqdxm19-45Uy2l2dRFReRhN8kZULyziZwQclN4ycaAG21FU&usqp=CAU"></a><br>
                <input tye="submit" style="background-color:#262626;color: white;padding: 10px 10px 10px 10px;text-align: center;text-decoration: none; border-radius:40px; width:80%"value="Moto G8 Plus(4gb/64gb) Rs:12,999/-" name="item">
            </div>
            </td>
        </tr>
        <tr>
               
           <td style="padding:0px 0px 0px 50px">
            <div>
                <a href="checkout.php"><img style="height: 215px;
                width: 70%;
                padding:10px 0px 0px 0px" 
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTxUUqjyxJyRFVhd2SUBIwn_ZJKRP5e8apqkL1lv0AQXabmE5mR&usqp=CAU"></a><br>
                <input type="submit" style="background-color: #262626;color: white;padding: 10px 10px 10px 10px;text-align: center;border-radius:40px;text-decoration: none;display: inline-block;"value="Moto One Action(4gb/64gb) Rs:11,999/-" name="item">
            </div>
            </td>
            <td style="padding:10px 0px 0px 50px">
            <div>
                <a href="checkout.php"><img style="height: 215px;
                width: 70%;
                padding:0px 0px 0px 0px" 
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcStnRPqFAf1qdbhSsD_dZqeWO1EuR0SUcU7D3u7vWW5Z4cUQ5qS&usqp=CAU"></a><br>
                <input type="submit" style="background-color:#262626;color: white;padding: 10px 10px 10px 10px;text-align: center;text-decoration: none;border-radius:40px;display: inline-block;"value="Moto One Vision(4gb/128gb) Rs:14,999/-" name="item">
            </div>
            </td>
            <td style="padding:10px 0px 0px 50px">
            <div>
                <a href="checkout.php"><img style="height: 215px;
                width: <100%>;
                padding:0px 0px 0px 0px" 
                src="https://thumbor.forbes.com/thumbor/960x0/https%3A%2F%2Fblogs-images.forbes.com%2Fjaymcgregor%2Ffiles%2F2019%2F01%2FMotorola-Razr-v4.jpg"></a><br>
                <input type="submit" style="background-color:#262626;color: white;padding: 10px 10px 10px 10px;text-align: center;text-decoration: none;border-radius:40px;display: inline-block;" value="Motorola Razr(6gb/128gb) Rs:1,49,999/-" name="item">
            </div>
            </td>
        </tr>    
        </table>
        </form>
    </body>
</html>