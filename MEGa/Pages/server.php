<?php
session_start();

$email    = "";
$username = "";
$password = "";
$role     = "";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'MEGa');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // primesc datele din form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password']);
  $password_2 = mysqli_real_escape_string($db, $_POST['repeatpass']);

  // validam datele 
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // verificam in baza de date daca un user exista deja cu acelasi
  // username sau parola

  $user_check_query = "SELECT * FROM user WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // am ajuns aici fara erori
  if (count($errors) == 0) {
  	$password = md5($password_1);//criptam parola inainte de a face insert

  	$query = "INSERT INTO user (username, email, password,role) 
  			  VALUES('$username', '$email', '$password' , 'user')";
  	mysqli_query($db, $query);
  	header('location: homepage.php');
  }
}
//Login user
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
        $password = md5($password);
        $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        $sql = "SELECT user.role FROM user WHERE username='$username' AND password='$password'";
        $result = mysqli_query($db,$sql); 
        $user = mysqli_fetch_array($result);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['role'] = $user['role']; 
          $_SESSION['success'] = "You are now logged in";
          header('location: homepage.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }
  
?>