<?php 
	session_start();

	
	$fname = "";
    $lname    = "";
    $mobile    = "";
    $email    = "";
    $regno    = "";
    $username    = "";
    $password    = "";
    
    
	$errors = array(); 
	$_SESSION['success'] = "";

	
	$db = mysqli_connect('localhost', 'root', '', 'srs');

	
	if (isset($_POST['reg_user'])) {
		
		$fname = mysqli_real_escape_string($db, $_POST['fname']);
        $lname = mysqli_real_escape_string($db, $_POST['lname']);
        $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $regno = mysqli_real_escape_string($db, $_POST['regno']);
        $username  = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		

        
        if (empty($fname)) { array_push($errors, "first name is required"); }
        if (empty($lname)) { array_push($errors, "last name is required"); }
        if (empty($mobile)) { array_push($errors, "mobile is required"); }
        if (empty($email)) { array_push($errors, "Email is required"); }
        if (empty($regno)) { array_push($errors, "regno is required"); }
		if (empty($username)) { array_push($errors, "Username is required"); }
		
		if (empty($password)) { array_push($errors, "Password is required"); }

		

		
		if (count($errors) == 0) {
			 
			$query = "INSERT INTO students (fname, lname,mobile,email,regno,username,password) 
					  VALUES('$fname' , '$lname ','$mobile','$email','$regno','$username', '$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: register.php');
		}

    }
    



if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password = $password;
        $query = "SELECT * FROM students WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);

        if (mysqli_num_rows($results) == 1) {
            session_regenerate_id();
             $_SESSION['loggedin'] = TRUE;
              $_SESSION['username'] = $_POST['username'];
             $_SESSION['id'] = $id;
            header('Location: home.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}

?>