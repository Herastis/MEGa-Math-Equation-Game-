<?php include('server.php')?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecuații</title>
    <link rel="stylesheet" href="../Css/Game.css">
    <link rel="stylesheet" href="../Css/Homepage.css">
    <script language="javascript" type="text/javascript" src="../scripts/loadgames.js"></script>
</head>

<body> 
    <?php 
    include ('loadgame.php');

    ?>
    <?php
    if(isset($_SESSION['username']) && $_SESSION['role']=="admin")
    {
      echo "
      <header>
      <nav>
        <div class='topnav'>
          <a class='homepage' href='homepage.php'>Home</a>
          <a class='active' href='algebragame.php'>Ecuații</a>
          <a class='admin' href='adminpage.php'>Admin page</a>
          <a class='adaugaecuatii' href='adaugaecuatii.php'> Adaugă o ecuație</a>
          <a class='riddle' href='riddle.php'> Ghicitori </a>
          <a class='quiz' href='quiz.php'> Quiz </a>
          <a class='documentatie' href='documentatie.php'>Documentație</a>
          <a class='export' href='exportecuatii.php'>Export ecuatii</a>
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
          <a class='active' href='algebragame.php'>Ecuații</a>
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
          <a class='active' href='algebragame.php'>Ecuații</a>
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
        <div class="categories">
            <ul>
                <li><a href="algebragame.php">Algebra</a></li>
                <li><a href="analizagame.php">Analiza</a></li>
                <li><a href="trigongame.php">Trigonometrie</a></li>
                <li><a href="geomgame.php">Geometrie</a></li>
           </ul>
        </div>

    <section>
        <div class="page-content">
            <form class="game" id='game' action="verifygeom.php" method="POST"> 
                <h3>Raspunde la intrebarile de mai jos</h3>
                <?php
                $exercises = [];
                $exercises = getGeometry();
                foreach($exercises as $ex) {
                ?>
                <label for="fquestion"><?php echo $ex->getEcuatie();?></label>
                <input type="text" id=<?php echo $ex->getId();?> name=<?php echo $ex->getId();?>>
                <input type="hidden" id=<?php echo $ex->getId();?> name="ids" value =<?php echo $ex->getId();?>>
                <?php
                }
                ?>

                <div class="form-btn">
                
                    <button class="btn" id='submit' name='submit' type="submit" value=<?php echo $ex->getCategorie();?>>Finish</button>

                </div>
                
            </form>
        </div>
    </section>
    <footer>
      <div class="footer">
          <p>Proiect realizat de Tomescu Tudor-Gabriel, Cazacu Răzvan-Nicușor și Pînzariu Ioana-Mălina</p>
        </div>
      </footer>
</body>
</html>