<?php  if ($_SESSION['role']=="admin") : ?>
<?php
$db = mysqli_connect('localhost', 'root', '', 'MEGa');
$role="user";
$select_users = "SELECT username, email FROM user WHERE role='$role'";
if ($res = mysqli_query($db, $select_users)) {
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_array($res)) {
            echo "
        <div class='card'>
            <div class='card-detalies'>";
        echo "<h4>User</h4>";
            echo "<p>Username :".$row['username']."</p>";
            echo "<p>Email :".$row['email']."</p>";
            echo "<a href='deleteuser.php?username=".$row['username']."'>Delete</a>";
            echo "</div>";
        echo "</div>";
        }
        
    }
    else {
        echo "No matching records are found.";
    }
}
else {
    echo "ERROR: Could not able to execute $select_users. "
                                .mysqli_error($db);
}


?>
<?php  endif ?>