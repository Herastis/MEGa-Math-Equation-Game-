<?php include('server.php')?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecuații</title>
    <link rel="stylesheet" href="../Css/riddle.css">
    <link rel="stylesheet" href="../Css/Homepage.css">
    <script language="javascript" type="text/javascript" src="../scripts/riddle.js"></script>
</head>

<body> 
    <?php 
      include ('theriddle.php');
    ?>
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
          <a class='adaugaecuatii' href='adaugaecuatii.php'> Adaugă o ecuație</a>
          <a class='active' href='riddle.php'> Ghicitori </a>
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
          <a class='adaugaecuatii' href='adaugaecuatii.php'> Adaugă o ecuație</a>
          <a class='active' href='riddle.php'> Ghicitori </a>
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
          <a class='active' href='riddle.php'> Ghicitori </a>
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
        <div class="page-content">
            <div class="container" id="game">
            <?php
                $exercises = [];
                $exercises = getRiddle();
                foreach($exercises as $ex) {
                ?>
                <div class="elements">
                    <img class="r-image" src=<?php echo $ex->getImagine();?>>
                    <div class="enunt"><p><?php echo $ex->getEnunt();?></p></div>
                </div>
                <div class="hidden">
                    <button class="btn" onclick="myTogglebtn()">Vezi raspuns</button>
                    <h2 class='raspuns' id='raspuns'>
                      <?php echo $ex->getRaspuns();?>
                    </h2>
                    
                </div>
                <div class="next-btn">
                <button class="btn-next" id='next' onclick='next()' value=<?php echo $ex->getId();?>>Urmatoare</button>
                </div>
                
                <?php
                }
                ?>
                
            </div>
        </div>
    </section>
    <footer>
      <div class="footer">
          <p>Proiect realizat de Tomescu Tudor-Gabriel, Cazacu Răzvan-Nicușor și Pînzariu Ioana-Mălina</p>
        </div>
      </footer>
</body>
</html>