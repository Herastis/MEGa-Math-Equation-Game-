<?php
include ('server.php')
?>
<!DOCTYPE html>

<head>
	<meta charset="UTF-8" />
	
	<title>Quiz</title>
    <link rel="stylesheet" href="../Css/quiz.css">
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
          <a class='algebragame' href='algebragame.php'>Ecuații</a>
          <a class='admin' href='adminpage.php'>Admin page</a>
          <a class='adaugaecuatii' href='adaugaecuatii.php'> Adaugă o ecuație</a>
          <a class='riddle' href='riddle.php'> Ghicitori </a>
          <a class='active' href='quiz.php'> Quiz </a>
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
          <a class='algebragame' href='algebragame.php'>Ecuații</a>
          <a class='adaugaecuatii' href='adaugaecuatii.php'> Adaugă o ecuație</a>
          <a class='riddle' href='riddle.php'> Ghicitori </a>
          <a class='active' href='quiz.php'> Quiz </a>
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
          <a class='algebragame' href='algebragame.php'>Ecuații</a>
          <a class='riddle' href='riddle.php'> Ghicitori </a>
          <a class='active' href='quiz.php'> Quiz </a>
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

    <div class="margin"> 
        
		<h1>Quiz primară </h1>
		
		<form action="result.php" method="post">
		
            <ol>
            
                <li>
                
                    <h3>Cel mai mare număr prim din intervalul [18, 28) este ...</h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) 23 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) 27 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) 24</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) 19</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Înmulțirea a două numere: -9 × -12</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) 118</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) 98</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) -108</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) 108</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Calculați diferența -35 - (-38)</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">73</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) 3</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) -73</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) -3</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Care numere sunt în ordine de la cel mai mare la cel mai mic? </h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) 85, 82, 58, 28</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) 28, 82, 85, 58</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) 58, 28, 85, 82</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) 85, 58, 82, 28</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Care numere sunt în ordine de la cel mai mic la cel mai mare?</h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A) 71, 76, 17, 67</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) 17, 67, 76, 71</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) 17, 71, 67, 76</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) 17, 67, 71, 76</label>
                    </div>
                
                </li>
            
            </ol>
            
            <input type="submit" value="Submit" class="submitbtn" />
		
		</form>
	
	</div>

    <footer>
  <div class="footer">
      <p>Proiect realizat de Tomescu Tudor-Gabriel, Cazacu Răzvan-Nicușor și Pînzariu Mălina-Ioana</p>
    </div>
  </footer>

</body>


</html>


