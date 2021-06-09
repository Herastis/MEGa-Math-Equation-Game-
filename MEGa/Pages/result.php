<?php
include('server.php')
?>
<!DOCTYPE html>

<html>
 
<head>
 <meta charset="UTF-8" />
 
 <title>Quiz results</title>
 
 <link rel="stylesheet" href="../Css/quiz.css">
</head>
 
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
            <li><a class='login' href='login.php'>Login</a></li>
            <li><a class='register' href='register.php'>Register</a></li>
          </ul>
        </div>
      </nav>
    </header>";
    }
  ?>

<?php

$db = mysqli_connect('localhost', 'root', '', 'MEGa');

$sql = "SELECT Answers FROM quiz";
$result = mysqli_query($db, $sql);
$answers = []; 
$i = 0;

if (mysqli_num_rows($result) > 0) {
     // output data of each row
     while($row = mysqli_fetch_assoc($result)) {
        //echo "Answers: " . $row["Answers"] . "<br>";
        $answers[$i] = $row["Answers"];
        $i = $i + 1; 
     }
    } else {
     echo "0 results";
    }

    //print_r($answers);
?>

<body>
 
<div class="margin">
 
 <h1>Rezultate:</h1>
 
        <?php
            if(isset($_POST['question-1-answers']))
                $answer1 = $_POST['question-1-answers'];
            else
                $answer1 = -1;

            if(isset($_POST['question-2-answers']))
                $answer2 = $_POST['question-2-answers'];
            else
                $answer2 = -1;
            
            if(isset($_POST['question-3-answers']))
                $answer3 = $_POST['question-3-answers'];
            else
                $answer3 = -1;

            if(isset($_POST['question-4-answers']))
                $answer4 = $_POST['question-4-answers'];
            else
                $answer4 = -1;
           
            if(isset($_POST['question-5-answers']))
                $answer5 = $_POST['question-5-answers'];
            else
                $answer5 = -1;
            
        
            $totalCorrect = 0;
            
    
            if ($answers[0] == $answer1) { $totalCorrect++; }
            if ($answers[1] == $answer2) { $totalCorrect++; }
            if ($answers[2] == $answer3) { $totalCorrect++; }
            if ($answers[3] == $answer4) { $totalCorrect++; }
            if ($answers[4] == $answer5) { $totalCorrect++; }
            

            if($totalCorrect<=1)
                $message = "<div id='results'><h3>Mai trebuie sa exersezi!!</h3></div>";
            elseif($totalCorrect<=3)
                $message = "<div id='results'><h3>Se putea si mai bine!!</h3></div>";
            elseif($totalCorrect<=5)
                $message = "<div id='results'><h3>Foarte bine!!</h3></div>";
            
            echo "<div id='results'><h1>$totalCorrect / 5 correcte</h1></div>";
            echo("\n" . $message);
            
        ?>
 
 </div>
 

 <footer>
  <div class="footer">
      <p>Proiect realizat de Tomescu Tudor-Gabriel, Cazacu Răzvan-Nicușor și Pînzariu Mălina-Ioana</p>
    </div>
  </footer>
</body>
 
</html>