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
          <a href="oneplus.php">OnePlus</a>
          <a href="iphone.php">iphone</a>
          <a class="active" href="nokia.php">Nokia</a>
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
      <form mehtod="post" action="checkout.php">
       <table align="center" method="post">
           <tr>
               
           <td style="padding:0px 0px 0px 100px">
            <div>
                <a ><img style="height: 215px;
                width: <70%>;
                padding:0px 0px 0px 0px" 
                src="https://fdn2.gsmarena.com/vv/pics/motorola/motorola-one-macro-1.jpg"></a>
                 <input type="submit" style="background-color:#262626;color: white;padding:10px 10px 10px 10px;text-align:center;text-decoration: none; border-radius:40px;display: inline-block;"name="item" value="Nokia 7.2(6gb/64gb) Rs:17,499/-">
            </div>
            </td>
            <td style="padding:0px 0px 0px 100px">
            <div>
                <a href="#"><img style="height: 215px;
                width: <50%></5>0%;
                padding:0px 0px 0px  0px"                    
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR3uzyWtYcg8c50wIUNnO9xk5my-a6TE8LJ85yszvZgVhCCO1RY&usqp=CAU"></a>
                <input type="submit" style="background-color:#262626;color: white;padding: 10px 10px 10px 10px;text-align: center;text-decoration: none; border-radius:40px;display: inline-block;"value="Nokia 6.1 Plus(4gb/64gb) Rs:8,499/-" name="item">
            </div>
            </td>
            <td style="padding:0px 0px 0px 100px">
            <div>
                <a href="#"><img style="height: 215px;
                width: <80%>;
                padding:0px 0px 0px 0px" 
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcStznEmjMEiDjVx7NP97g0nankGL7SBw80DG4r8LtEY__3JW8aW&usqp=CAU"></a>
                <input type="submit" style="background-color:#262626;color: white;padding: 10px 10px 10px 10px;text-align: center;text-decoration: none; border-radius:40px;display: inline-block;" value="Nokia 3.2(2gb/16gb) Rs:7,099/-" name="item">
            </div>
            </td>
        </tr>
        <tr>
               
           <td style="padding:0px 0px 0px 100px">
            <div>
                <a href="#"><img style="height: 215px;
                width: 70%;
                padding:0px 0px 0px 0px" 
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTxUUqjyxJyRFVhd2SUBIwn_ZJKRP5e8apqkL1lv0AQXabmE5mR&usqp=CAU"></a>
                <input type="submit" style="background-color: #262626;color: white;padding: 10px 10px 10px 10px;text-align: center;border-radius:40px;text-decoration: none;display: inline-block;" value="Nokia 2.2(2gb/16gb) Rs:5,999/-" name="item">
            </div>
            </td>
            <td style="padding:0px 0px 0px 100px">
            <div>
                <a href="#"><img style="height: 215px;
                width: 70%;
                padding:0px 0px 0px 0px" 
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcStnRPqFAf1qdbhSsD_dZqeWO1EuR0SUcU7D3u7vWW5Z4cUQ5qS&usqp=CAU"></a>
                <input type="submit" style="background-color:#262626;color: white;padding: 10px 10px 10px 10px;text-align: center;text-decoration: none;border-radius:40px;display: inline-block;"value="Moto One Vision(4gb/128gb) Rs:14,999/-" name="item">
            </div>
            </td>
            <td style="padding:0px 0px 0px 100px">
            <div>
                <a href="#"><img style="height: 215px;
                width: 80%;
                padding:0px 0px 0px 0px" 
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSi7LjJ2gqKzg9RHiSdj476a6c7oQgDbT-02rZRrFM5PLI2_6V5&usqp=CAU"></a>
                <input type="submit" style="background-color:#262626;color: white;padding: 10px 10px 10px 10px;text-align: center;text-decoration: none;border-radius:40px;display: inline-block;"value="Nokia 4.2(3gb/32gb) Rs:9,999/-" name="item">
            </div>
            </td>
        </tr>    
        </table>
        </form>
    </body>
</html>