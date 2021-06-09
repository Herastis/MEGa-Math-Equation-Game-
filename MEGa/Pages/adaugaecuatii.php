<?php include('server.php')?>
<!DOCTYPE html>
<html lang ="ro">
<head>
  <meta charset="UTF-8">
  <title>MEGa - Math Equation Game</title>
  <link rel="stylesheet" href="../Css/AdaugaEcuatii.css">
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
          <a class='homepage' href='homepage.php'>Home</a>
          <a class='ecuatii' href='algebragame.php'>Ecuații</a>
          <a class='admin' href='adminpage.php'>Admin page</a>
          <a class='active' href='adaugaecuatii.php'> Adaugă o ecuație</a>
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
          <a class='homepage' href='homepage.php'>Home</a>
          <a class='ecuatii' href='algebragame.php'>Ecuații</a>
          <a class='active' href='adaugaecuatii.php'> Adaugă o ecuație</a>
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
          <a class='active' href='adaugaecuatii.php'> Adaugă o ecuație</a>
          <a class='riddle' href='riddle.php'> Ghicitori </a>
          <a class='quiz' href='quiz.php'> Quiz </a>
          <a class='documentatie' href='documentatie.php'>Documentație</a>
          <ul class='register-login'>
            <li><a class='login' href='login.php'>Login</a></li>
            <li><a class='register' href='register.php'>Register</a></li>
          </ul>
        </div>
      </nav>
    </header>";
    }
  ?>
  
    
  <h1 id="uploadEq-title">Adaugă o ecuație</h1>
  <form method="POST" action="adaugecuatie.php" id ="upload-eq">
      <div class="input-container">
        <label for="equation">Ecuatia</label>
        <input class="input-field" type="text" name="ecuatie" placeholder="y^(2) + x*y - x^(2) * y' = 0" id="email" required>
        <label for="equation">Raspunsul</label>
        <input class="input-field" type="text" name="raspuns" id="email" required>
        <label for="equation">Categorie</label>
        <input class="input-field" type="text" name="categorie" id="email" required>
        <button type="submit" class="btn" name="submitexercise"><i class="fa fa-upload icon"></i></button>
      </div>
  </form>
    <h1 class="uploadEq-title2">Sau fa upload la un fisier csv cu ecuatii ce contin : categorie , ecuatia si raspunsul</h1>
    <form method="POST" action="adaugecuatiecsv.php" id ="upload-eq" enctype="multipart/form-data">
      <div class="input-container">
      <input type="file" name="fileToUpload" id="fileToUpload">
        <button type="submit" class="btn" name="submitexercisecsv"><i class="fa fa-upload icon"></i></button>
      </div>
  </form>


  <img src="Images/solvingEquation.jpg" id ="solvingEquation" alt="solving-equation examples" >

  <footer>
    <div class="footer">
      <p lang ="ro">Proiect realizat de Tomescu Tudor-Gabriel, Cazacu Răzvan-Nicușor și Pînzariu Mălina-Ioana</p>
    </div>
  </footer>

</body>
</html>