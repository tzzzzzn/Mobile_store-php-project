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
  padding: 7px 16px 7px 10px;
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
          <a class="active" href="home.php">Home</a>
          <a href="moto.php">Moto</a>
          <a href="redmi.php">Redmi</a>
          <a href="oneplus.php">OnePlus</a>
          <a href="iphone.php">iphone</a>
          <a href="nokia.php">Nokia</a>
          <a href="samsung.php">Samsung</a>
          <div class="topnav-right">
            <?php
              
              if(!isset($_SESSION)) 
                { 
                    session_start(); 
                }
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
       <table>
           <tr>
               
           <td style="padding:0px 0px 0px 100px">
            <div>
                <a href="moto.php"><img style="height: 215px;
                width: 70%;
                padding:0px 0px 0px 25px" 
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ1RClseVmatBvTh3AwkCbfHoklKSFKeXjl0F8a7O2GPBVuNJRm&usqp=CAU"></a>
                 <p style="padding:10px 10px 0px 10px"><a href="moto.php" style="background-color:#262626;color: white;padding:10px 100px 10px 100px;text-align:center;text-decoration: none; border-radius:40px;display: inline-block;"target="_blank"> Motorola</a></p>
            </div>
            </td>
            <td style="padding:0px 0px 0px 100px">
            <div>
                <a href="redmi.php"><img style="height: 215px;
                width: 70%;
                padding:0px 0px 0px  20px"                    
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSt3H57p7yRYvknSj4Q49XYudOAv8hKFsYxmrl4g1LgLv8vKR3H&usqp=CAU"></a>
                <p ><a href="redmi.php" style="background-color:#262626;color: white;padding: 10px 100px 10px 100px;text-align: center;text-decoration: none; border-radius:40px;display: inline-block;"target="_blank">Redmi</a></p>
            </div>
            </td>
            <td style="padding:0px 0px 0px 100px">
            <div>
                <a href="oneplus.php"><img style="height: 215px;
                width: 70%;
                padding:0px 0px 0px 30px" 
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSUORuY0Y0xRWIil17URaXmovn3wZ_MgbfGJYkPBKfYOeYVp9mb&usqp=CAU"></a>
                <p><a href="oneplus.php"><a href="#" style="background-color:#262626;color: white;padding: 10px 100px 10px 100px;text-align: center;text-decoration: none; border-radius:40px;display: inline-block;"target="_blank">OnePlus</a></a></p>
            </div>
            </td>
        </tr>
        <tr>
               
           <td style="padding:0px 0px 0px 100px">
            <div>
                <a href="iphone.php"><img style="height: 215px;
                width: 70%;
                padding:0px 0px 0px 30px" 
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTtOTigH8mJmlMie4-WwQWpsQBk7LY2NnRW3IBiwJI7x9OEXx96&usqp=CAU"></a>
                <p><a href="iphone.php" style="background-color: #262626;color: white;padding: 10px 100px 10px 100px;text-align: center;border-radius:40px;text-decoration: none;display: inline-block;"target="_blank">iphone</a></p>
            </div>
            </td>
            <td style="padding:0px 0px 0px 100px">
            <div>
                <a href="nokia.php"><img style="height: 215px;
                width: 70%;
                padding:0px 0px 0px 30px" 
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTbNUW6XnJKYsQwoFxk7r4LutM_nsVmE8d88xgTza027dJTNIXn&usqp=CAU"></a>
                <p><a href="nokia.php" style="background-color:#262626;color: white;padding: 10px 100px 10px 100px;text-align: center;text-decoration: none;border-radius:40px;display: inline-block;"target="_blank">Nokia</a></p>
            </div>
            </td>
            <td style="padding:0px 0px 0px 100px">
            <div>
                <a href="samsung.php"><img style="height: 215px;
                width: 70%;
                padding:0px 0px 0px 25px" 
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS7VLIkQg3IwsH_abj7y-2grIJOs1hyb8XJ7i_DdvkQu7O26kh5&usqp=CAU"></a>
                <p><a href="samsung.php" style="background-color:#262626;color: white;padding: 10px 100px 10px 100px;text-align: center;       text-decoration: none;border-radius:40px;display: inline-block;"target="_blank">Samsung</a></p>
            </div>
            </td>
        </tr>    
        </table>
    </body>
</html>