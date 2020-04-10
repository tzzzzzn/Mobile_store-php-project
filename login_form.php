
<!DOCTYPE html>

<html>
     <title>
         Sign up form 
     </title>
     <style>
             input[type=text], select {
              width: 115%;
              padding: 12px 10px;
              display: inline-block;
              border: 1px solid #ccc;
              border-radius: 400px;
              box-sizing: border-box;
            }
             input[type=email], select {
              width: 115%;
              padding: 12px 20px;
              display: inline-block;
              border: 1px solid #ccc;
              border-radius: 400px;
              box-sizing: border-box;
            }
             input[type=password], select {
              width: 115%;
              padding: 12px 20px;

              display: inline-block;
              border: 1px solid #ccc;
              border-radius: 400px;
              box-sizing: border-box;
            }
         </style>
 <body method ="get" style="background-image: url('https://images.unsplash.com/photo-1413708617479-50918bc877eb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80');background-repeat:no-repeat;background-size: 1366px ;"text="#0000">
  <form style="font-family: Courier, monospace;" method="post" action='divertlogin.php' >
  <font size="4">
  <br><br>
  <strong>
  <h1 align="center">Login form</h1>
   <table  cellspacing="10"  align="center">

      <tr>
           
           <td>
                <input type ="email" name="uemail" placeholder="Email"/>
           </td>
     </tr>
         
     <tr>
     <tr>
          
           <td>
                <input type="password" name="upassword" placeholder="Password">
           </td>
    </tr>
    <tr  align='center'>
           <td>
                
                  <input style="width: 100%;background-color:black;color:white;padding:20px 20px 20px 10px ;margin: 10px 0px 0px 10px;
                  border: none;
                  border-radius: 4px;
                  cursor: pointer;"type="submit"name="sub" value="Login">
              
          </td>
    </tr>
       
       </table>
       </strong>
       </font>
    </form>
</body>
</html>