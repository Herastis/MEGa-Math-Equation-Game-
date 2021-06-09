<?php
include('server.php')
?>
<!DOCTYPE html>
<html lang="ro">
<head>
  <meta charset="UTF-8">
  <title>MEGa - Math Equation Game</title>
  <link rel="stylesheet" href="../Css/Login.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
</head>

<body>
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
          <a class='ecuatii' href='algebragame.php'>Ecuații</a>
          <a class='adaugaecuatii' href='adaugaecuatii.php'> Adaugă o ecuație</a>
          <a class='riddle' href='riddle.php'> Ghicitori </a>
          <a class='quiz' href='quiz.php'> Quiz </a>
          <a class='documentatie' href='documentatie.php'>Documentație</a>
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
          <a class='ecuatii' href='algebragame.php'>Ecuații</a>
          <a class='riddle' href='riddle.php'> Ghicitori </a>
          <a class='quiz' href='quiz.php'> Quiz </a>
          <a class='documentatie' href='documentatie.php'>Documentație</a>
          <ul class='register-login'>
            <li><a class='active' href='login.php'>Login</a></li>
            <li><a class='register' href='register.php'>Register</a></li>
          </ul>
        </div>
      </nav>
    </header>";
    }
  ?>

  <h1 class = "auth-box" id="login-title">Login</h1>

  

  <form id="auth-form" method="POST" action="login.php">
  <?php
include('errors.php');
?>
      <div class="input-container">
        <i class="fa fa-user icon"></i>
        <input class="input-field" type="text" name="username" placeholder="Username" id="username" required>
      </div>

      <div class="input-container">
        <i class="fa fa-envelope icon"></i>
        <input class="input-field" type="password" name="password" placeholder="**********" id="passwd" required>
      </div>

      <div class="input-container">
        <button type="submit" class="btn" name="login_user"><span>Loghează-te</span></button>
      </div>
  </form>

  <form action="/MEGa/View/Pages/register.php">
      <div class="input-container">
        <button type="submit" class="btn">Nu aveți cont? <br/> <span>Înregistrați-vă</span></button>
      </div>
  </form>
 
  <img src="Images/pi.jpg" id ="login-joke" alt="Pi-joke">

  <footer>
  <div class="footer">
      <p>Proiect realizat de Tomescu Tudor-Gabriel, Cazacu Răzvan-Nicușor și Pînzariu Mălina-Ioana</p>
    </div>
  </footer>


</body>
</html>