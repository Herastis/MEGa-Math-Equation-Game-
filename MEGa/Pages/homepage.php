<?php include('server.php')?>
<!DOCTYPE html>
<html lang="ro">
<head>
<meta charset="UTF-8">
<title>MEGa - Math Equation Game</title>
<link rel="stylesheet" type="text/css" href="../Css/Homepage.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
          <a class='active' href='homepage.php'>Home</a>
          <a class='ecuatii' href='algebragame.php'>Ecuații</a>
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

<section>
  <h2 class="logo-title">
    <picture>
      <img src="Images/MEGa.svg" alt="logo" class="logo">
    </picture>
    Math Equation Game
  </h2>
  <article>
    <header>
      <p class="detalii-titlu">
        Despre proiect
      </p>
    </header>
    <p class="detalii">
      Pentru acest proiect trebuie sa dezvoltam un joc Web cu caracter educațional capabil să furnizeze utilizatorilor (autentificați sau nu) o modalitate facilă de a învăța 
      și utiliza ecuații matematice specifice – de dorit, notorii – din diverse arii: algebră, analiză, geometrie, trigonometrie. Sursa ecuațiilor 
      (“artefactele” jocului) poate fi un tratat, un sit Web ori eventual poate proveni de pe calculatorul client 
      (prin operația de upload). Sistemul va oferi suport pentru includerea de exerciții/probleme cu caracter ludic referitoare la fiecare ecuație 
      disponibilă.
    </p>
  </article>
  <article>
    <header>
      <p class ="arii-titlu">
        Arii
      </p>
    </header>
    <p class ="arii">
      Ariile ecuatiilor vor fi :    </p>
      <ul>
        <li>Algebră</li>
        <li>Analiză</li>
        <li>Geometrie</li>
        <li>Trigonometrie</li>  
      </ul>
  </article>
</section>
<footer>
  <div class="footer">
      <p>Proiect realizat de Tomescu Tudor-Gabriel, Cazacu Răzvan-Nicușor și Pînzariu Mălina-Ioana</p>
    </div>
  </footer>

</body>
</html>