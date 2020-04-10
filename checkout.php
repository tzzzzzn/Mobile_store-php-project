
<!DOCTYPE html>

<html>
     <title>
         Check out 
     </title>
     <style>
             input[type=text], select {
              width: 85%;
              padding: 12px 10px;
              display: inline-block;
              border: 1px solid #ccc;
              border-radius: 400px;
              box-sizing: border-box;
            }
         </style>
 <body style="background-image: url('https://images.unsplash.com/photo-1413708617479-50918bc877eb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80');background-repeat:no-repeat;background-size: 1366px ;"text="#0000">
  <form style="font-family: Courier, monospace;" method="post" action="thanks.php">
  <font size="4">
  <br><br>
  <strong>
  <h1 align="center">Check out form</h1>
  <div style="
   max-width:620px;margin:20px auto;border-radius: 20px;padding:5px 0px 0px 0px;"> 
   <table  cellspacing="10"  align="center" >
      <tr>
            <td>
                <input type ="text" name="fcard" placeholder="Card Number"/>
            </td>
       </tr>
        
      <tr>
           
           <td>
                <input type ="text" name="bankholder" placeholder="Account holder Name" />
           </td>
     </tr>
         
     <tr>
           <td >
                <input style="width: 41%;" type="text" name="epiry" placeholder="DD/MM">
                <input style="width: 41%;" type="text" name="cvv" placeholder="CVV">
           </td>
           
     </tr>
       
     <tr>
          <td>
                <input type="radio" name="ctype" value="upi">
                <label for="male">UPI</label>
                <input type="radio" name="ctype" value="paytm">
                <label for="female">Paytm</label>
                <input type="radio" name="ctype" value="COD">
                <label for="female">COD</label>
           </td>
    </tr>
    <tr>
          
           
    </tr>
    <tr  >
           <td>
                
                  <input style="width: 85%;background-color:black;color:white;padding:20px 20px 20px 0px ;
                  border: none;
                  border-radius: 40px;
                  cursor: pointer;"type="submit" name="sub" value="<?php echo $_POST['item'] ?>">
              
          </td>
    </tr>
       
       </table>
       </div></strong>
       </font>
    </form>
</body>
</html>
<?php
    //https://wallpaperaccess.com/full/1222614.jpg
?>
