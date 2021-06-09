<?php include('server.php')?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="stylesheet" href="../Css/Register.css">
    <link rel="stylesheet" href="../Css/Homepage.css">
</head>

<body>

<div class="body-backgr">
<?php
    if(isset($_SESSION['username']) && $_SESSION['role']=="admin")
    {
      echo "
      <header>
      <nav>
        <div class='topnav'>
          <a class='active' href='homepage.php'>Home</a>
          <a class='ecuatii' href='algebragame.php'>Ecuații</a>
          <a class='admin' href='adminpage.php'>Admin page</a>
          <a class='adaugaecuatii' href='adaugaecuatii.php'> Adaugă o ecuație</a>
          <a class='riddle' href='riddle.php'> Ghicitori </a>
          <a class='quiz' href='quiz.php'> Quiz </a>
          <a class='documentatie' href='documentatie.php'>Documentație</a>
          <a class='export' href='exportecuatii.php'>Export ecuații</a>
          <ul class='register-login'>
          <li><a class='logout' href='logout.php'>Logout</a></li>
          </ul>
        </div>
      </nav>
    </header>
    ";
    }else if (isset($_SESSION['username']) && $_SESSION['role']=="user"){
      echo "
      <header>
      <nav>
        <div class='topnav'>
          <a class='active' href='homepage.php'>Home</a>
          <a class='ecuatii' href='algebragame.php'>Ecuatii</a>
          <a class='adaugaecuatii' href='adaugaecuatii.php'> Adaugă o ecuație</a>
          <a class='riddle' href='riddle.php'> Ghicitori </a>
          <a class='quiz' href='quiz.php'> Quiz </a>
          <a class='documentatie' href='documentatie.php'>Documentatie</a>
          <ul class='register-login'>
          <li><a class='logout' href='logout.php'>Logout</a></li>
          </ul>
        </div>
      </nav>
    </header>
    ";
    }else {
      echo "<header>
      <nav>
        <div class='topnav'>
          <a class='homepage' href='homepage.php'>Home</a>
          <a class='ecuatii' href='algebragame.php'>Ecuatii</a>
          <a class='riddle' href='riddle.php'> Ghicitori </a>
          <a class='quiz' href='quiz.php'> Quiz </a>
          <a class='documentatie' href='documentatie.php'>Documentatie</a>
          <ul class='register-login'>
            <li><a class='login' href='login.php'>Login</a></li>
            <li><a class='active' href='register.php'>Register</a></li>
          </ul>
        </div>
      </nav>
    </header>";
    }
  ?>
    <section>
        <div class="section">
            <form class="forms" method="POST" action="register.php">
            <?php include('errors.php'); ?>
                <div class ="form-style">
                    <h4>Creare cont</h4>
                    <label for="email">Email</label>
                    <input type="email" placeholder="Email" name="email" id="email" required>
                    <label for="username">Username</label>
                    <input type="text" placeholder="Nume de utilizator" name="username" id="username" required>
                    <label for="password">Parola</label>
                    <input type="password" placeholder="Alege o parola" name="password" id="password" required>
                    <label for="repeatpass">Verificare parola</label>
                    <input type="password" placeholder="Confirmare parola" name="repeatpass" id="repeatpass" required>
                    <button class="submit-button" type="submit" name="reg_user">Sign up</button>
                    <div class="already-sign">
                        <p>Ai deja cont? <a href="login.php">Sign in</a></p>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
<footer>
    <div class="footer">
        <p>Proiect realizat de Tomescu Tudor-Gabriel, Cazacu Răzvan-Nicușor și Pînzariu Mălina-Ioana</p>
      </div>
</footer>

</body>
</html>