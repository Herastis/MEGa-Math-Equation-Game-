<?php
$db = mysqli_connect('localhost', 'root', '', 'MEGa');
$errors = array(); 

$sql = "DELETE FROM user WHERE username='" . $_GET["username"] . "'";
if (mysqli_query($db, $sql)) {
  header('location:adminpage.php');
} else {
    array_push($errors, "Eroare la stergerea unui user !");
}
?>