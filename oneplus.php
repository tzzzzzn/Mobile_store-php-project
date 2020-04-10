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
          <a href="moto.php">Moto</a>
          <a href="redmi.php">Redmi</a>
          <a class="active" href="oneplus.php"neplus>OnePlus</a>
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
       <table align="center">
           <tr>
               
           <td style="padding:0px 100px 0px 100px">
            <div>
                <a href="#"><img style="height: 215px;
                width: <120%>;
                padding:0px 0px 0px 10px" 
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRwCkapYWEXkBD0M7oc7eZbmfy7FyDhhx-oYDDOiPHfBGGYZFM8&usqp=CAU"></a>
                 <p style="padding:0px 0px 0px 0px"><a href="#" style="background-color:#262626;color: white;padding:10px 10px 10px 10px;text-align:center;text-decoration: none; border-radius:40px;display: inline-block;"target="_blank"> OnePlus 7T(8gb/256gb) Rs:37,999/-</a></p>
            </div>
            </td>
            <td style="padding:0px 100px 0px 100px">
            <div>
                <a href="#"><img style="height: 215px;
                width: <50%>;
                padding:10px 0px 0px  10px"                    
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTh0IYuMg0SndwecA2pic0uoMpeSPr-GKG8ZIMzokmCzU5OvzQO&usqp=CAU"></a>
                <p ><a href="#" style="background-color:#262626;color: white;padding: 10px 10px 10px 10px;text-align: center;text-decoration: none; border-radius:40px;display: inline-block;"target="_blank">Oneplus 7T Pro (12gb/256gb) Rs:53,9999/-</a></p>
            </div>
            </td>
            <td style="padding:0px 100px 0px 100px">
            <div>
                <a href="#"><img style="height: 215px;
                width: 80%;
                padding:px 0px 0px 10px" 
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTS09Rrsv46sEq_aYfSgQVr39nj4KY0QBNTeefNLKLX2I-W6FWk&usqp=CAU"></a>
                <p><a href="#"><a href="#" style="background-color:#262626;color: white;padding: 10px 10px 10px 10px;text-align: center;text-decoration: none; border-radius:40px;display: inline-block;"target="_blank">OnePlus 7 (8gb/256gb) Rs:31,999/-</a></a></p>
            </div>
            </td>
        </tr>
        <tr>
               
           <td style="padding:0px 100px 0px 100px">
            <div>
                <a href="#"><img style="height: 215px;
                width: 70%;
                padding:10px 0px 0px 0px" 
                src="https://fdn2.gsmarena.com/vv/bigpic/oneplus-6t-thunder-purple.jpg"></a>
                <p><a href="#" style="background-color: #262626;color: white;padding: 10px 10px 10px 10px;text-align: center;border-radius:40px;text-decoration: none;display: inline-block;"target="_blank">OnePlus 6T(6gb/128gb) Rs:31,999/-</a></p>
            </div>
            </td>
            <td style="padding:0px 100px 0px 100px">
            <div>
                <a href="#"><img style="height: 215px;
                width: 70%;
                padding:10px 0px 0px 0px" 
                src="https://fdn2.gsmarena.com/vv/bigpic/oneplus-6t-thunder-purple.jpg"></a>
                <p><a href="#" style="background-color:#262626;color: white;padding: 10px 10px 10px 10px;text-align: center;text-decoration: none;border-radius:40px;display: inline-block;"target="_blank">OnePlus 6T(8gb/128gb) Rs:31,999/-</a></p>
            </div>
            </td>
            <td style="padding:0px 100px 0px 100px">
            <div>
                <a href="#"><img style="height: 215px;
                width: <100%>;
                padding:10px 0px 0px 10px" 
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ1Dkgh-rqiLevzigfjulYyoKQ9grFGTfoHEPIvtw7I6AUzkAUm&usqp=CAU"></a>
                <p><a href="#" style="background-color:#262626;color: white;padding: 10px 10px 10px 10px;text-align: center;text-decoration: none;border-radius:40px;display: inline-block;"target="_blank">OnePlus 7 Pro(6gb/128gb) Rs:43,990/-</a></p>
            </div>
            </td>
        </tr>    
        </table>
    </body>
</html>