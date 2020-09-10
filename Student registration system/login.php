<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
      <script>
        function validation() {
           var username =document.getElementById("username").value;
          var password = document.getElementById("password").value;

      if(username == "")
      {
        document.getElementById("msg").innerHTML = "**please fill the username";
        return false;
      }
      if(password == ""){
        document.getElementById("msg1").innerHTML = "**please fill the password";
              return false;
      } 

      

        }
    </script>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>
<?php include 'nav.php';?>
    <?php include('errors.php'); ?>
    <div class="header">
        <h2>Login</h2>
      </div>
      <form method="post" action="authenticate.php" onsubmit="return validation()">
      <?php include('errors.php'); ?>
           <div class="input-group">
              <label>username</label>
              <input type="text" name="username" value="" id="username">
              <span id="msg" style="color:red;"></span>
           </div>
           <div class="input-group">
              <label>password</label>
              <input type="password" name="password" value="" id="password">
              <span id="msg1" style="color:red;"></span>
           </div>
           <div class="input-group">
			<button type="submit" class="btn" >Login</button>
        </div>
        
</form>
</body>
</html>
