
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
  <form style="font-family: Courier, monospace;" method="get" action='divertsignup.php' >
  <font size="4">
  <br><br>
  <strong>
  <h1 align="center">Sign up </h1>
  <h3 align="center" style="color:red">Password did'nt match</h3>
   <table  cellspacing="10"  align="center">
      <tr>
            <td>
                <input type ="text" name="uname" placeholder="Username"/>
            </td>
       </tr>
        
      <tr>
           
           <td>
                <input type ="email" name="email" placeholder="Email"/>
           </td>
     </tr>
         
     <tr>
           
           <td>
                <input type="radio" name="ugender" value="male">
                <label for="male">Male</label>
                <input type="radio" name="ugender" value="female">
                <label for="female">Female</label>
           </td>
     </tr>
     <tr>
          
           <td>
                <input type="text" name="umobile" placeholder="Mobile Number">
           </td>
    </tr>
     <tr>
          
           <td>
                <input type="password" name="upassword" placeholder="Password">
           </td>
    </tr>
    <tr>
          
           <td>
                <input type="password" name="uRepassword" placeholder="Re-enter Password">
           </td>
    </tr>
    <tr  align='center'>
           <td>
                
                  <input style="width: 100%;background-color:black;color:white;padding:20px 20px 20px 10px ;margin: 10px 0px 0px 10px;
                  border: none;
                  border-radius: 4px;
                  cursor: pointer;"type="submit" name="sub" value="Create Account">
              
          </td>
    </tr>
       
       </table>
       </strong>
       </font>
    </form>
</body>
</html>
