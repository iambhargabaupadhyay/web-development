<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
      <script >
    function validation() {
     
     var x = document.getElementById("mobile").value;
     var y = document.getElementById("fname").value;
     var z = document.getElementById("lname").value;
     var b = document.getElementById("email").value;
     var c = document.getElementById("regno").value;
     var d = document.getElementById("username").value;
     var e = document.getElementById("password").value;



 if (y == "") {
                document.getElementById("Message1").innerHTML = "**please fill the first name";
                return false;
            }

if (z == "")
 {
                document.getElementById("Message2").innerHTML = "**please fill the last name";
                return false;
            }


             if (b == "") {
                document.getElementById("Message4").innerHTML = "**please fill the email";
                return false;
            }

            if (c == "") {
                document.getElementById("Message5").innerHTML = "**please fill regno";
                return false;
            }

            if (d == "") {
                document.getElementById("Message6").innerHTML = "**please fill the username";
                return false;
            }

            if (e == "") {
                document.getElementById("Message7").innerHTML = "**please fill the password";
                return false;
            }


 

       if (x == "") {
                document.getElementById("Message3").innerHTML = "**please fill the mobile number";
                return false;
            }
           if (isNaN(x)) {
                document.getElementById("Message3").innerHTML = "**please fill only number";
                return false;
            }

            if (x.length<10) {
                document.getElementById("Message3").innerHTML = "**mobile number must be 10 digit";
                return false;
            }

             if (x.length>10) {
                document.getElementById("Message3").innerHTML = "**mobile number must be 10 digit";
                return false;
            }

            if (x.length>10) {
                document.getElementById("Message3").innerHTML = "**mobile number must be 10 digit";
                return false;
            }
           if ((x.charAt(0) !=9 ) && (x.charAt(0) !=8 ) && (x.charAt(0) !=7 ) ) {
                document.getElementById("Message3").innerHTML = " mobile Number must be start with 9,8 and 7";
                return false;
            }

           
    }
  </script>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>
<?php include 'nav.php';?>
    <div class="header">
        <h2>Register</h2>
      </div>
      <form method="post" action="register.php" onsubmit="return validation()">
      <?php include('errors.php'); ?>
          <div class="input-group">
              <label>First Name</label>
              <input type="text" name="fname" id="fname" value="<?php echo $fname; ?>">
              <span id="Message1" style="color:red;"></span>
           </div>
           <div class="input-group">
              <label>Last name</label>
              <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>">
              <span id="Message2" style="color:red;"></span>

           </div>
           <div class="input-group">
              <label>mobile number</label>
              <input type="text" name="mobile" id="mobile" value="<?php echo $mobile; ?>" >
              <span id="Message3" style="color:red;"></span>
           </div>
           <div class="input-group">
              <label>Email</label>
              <input type="text" name="email"  id="email" value="<?php echo $email; ?>">
              <span id="Message4" style="color:red;"></span>
           </div>
           <div class="input-group">
              <label>Registration Number</label>
              <input type="text" name="regno" id="regno" value="<?php echo $regno; ?>">
              <span id="Message5" style="color:red;"></span>
           </div>
           <div class="input-group">
              <label>username</label>
              <input type="text" name="username"  id="username" value="<?php echo $username; ?>">
              <span id="Message6" style="color:red;"></span>
           </div>
           <div class="input-group">
              <label>password</label>
              <input type="password" name="password" id="password"  value="<?php echo $password; ?>">
              <span id="Message7" style="color:red;"></span>
           </div>
           <div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
        </div>
        
</form>
</body>
</html>
