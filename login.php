<?php 
  // Starts the session
  session_start();

// Check Login form submitted
  if(isset($_POST['Submit'])){
  
  
  // Define username and associated password array
  $logins = array('Nick' => '123456', 'Stanley' => 'admin', 'administrator' => 'admin1234');

// Check and assign submitted user_name and password to new variable
  $user_name = isset($_POST['uname']) ? $_POST['uname'] : '';
  $password = isset($_POST['psw']) ? $_POST['psw'] : '';
// Check user_name and password existence in defined array
  if (isset($logins[$uname]) && $logins[$uname] == $psw){
  
  // Success: Set session variables and redirect to Protected page
  $_SESSION['UserData']['uname']=$logins[$uname];
  header("location:guest.html");
  exit;
  } else {
  
  
  // Unsuccessful attempt: Set error message
  $msg="<span style='color:red'>Invalid Login Details</span>";
  }
  }
?>
  <form action="" method="POST" name="Login_Form">
  <table width="360" border="1px" align="center" cellpadding="10px" cellspacing="1" class="Table">
  <?php if(isset($msg)){?>
  <tr>
  <td colspan="3" align="center" valign="top"><?php echo $msg;?></td>
  </tr>
  <?php } ?>
  <tr>
  <td colspan="3" align="left"><h3>Login</h3></td>
  </tr>
  <tr>
  <td align="right">Username</td>
  <td><input name="user_name" type="text" class="Input"></td>
  </tr>
  <tr>
  <td align="right">Password</td>
  <td><input name="password" type="password" class="Input"></td>
  </tr>
  <tr>
  <td> </td>
  <td><input name="Submit" type="submit" value="Login" class="Button"></td>
  </tr>
  </table>
  </form>