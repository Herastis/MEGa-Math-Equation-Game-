<?php include('server.php')?>
<!DOCTYPE html>
<html lang="ro">
<head>
<meta charset="UTF-8">
<title>MEGa - Math Equation Game</title>
<link rel="stylesheet" href="../Css/Homepage.css">
<link rel="stylesheet" href="../Css/Documentatie.css">
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
          <a class='homepage' href='homepage.php'>Home</a>
          <a class='ecuatii' href='algebragame.php'>Ecuații</a>
          <a class='admin' href='adminpage.php'>Admin page</a>
          <a class='adaugaecuatii' href='adaugaecuatii.php'> Adaugă o ecuație</a>
          <a class='riddle' href='riddle.php'> Ghicitori </a>
          <a class='quiz' href='quiz.php'> Quiz </a>
          <a class='active' href='documentatie2.php'>Documentație</a>
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
          <a class='active' href='documentatie2.php'>Documentație</a>
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
          <a class='active' href='documentatie2.php'>Documentație</a>
          <ul class='register-login'>
            <li><a class='login' href='login.php'>Login</a></li>
            <li><a class='register' href='register.php'>Register</a></li>
          </ul>
        </div>
      </nav>
    </header>";
    }
  ?>

<article resoluce="#" typeof="schema:ScholarlyArticle">
        <header>
            <h1>MEGa - Math Equation Game</h1>
        </header>
        <section id="authors" typeof="AuthorsList">
        <h2>Realizat de:</h2>    
        <div role="contentinfo">
                <ul>
                    <li typeof="sa:ContributorRole" property="schema:author">
                        <span typeof="schema:Person">
                        <meta property="schema:familyName" content="Cazacu"/>
                        <meta property="schema:givenName" content="Răzvan"/>
                        <meta property="schema:additionalName" content="Nicușor"/>
                        <span property="schema:name">Cazacu Răzvan-Nicușor</span>
                        </span>
                    </li>
                    <li typeof="sa:ContributorRole" property="schema:author">
                        <span typeof="schema:Person">
                     <meta property="schema:familyName" content="Tomescu"/>
                     <meta property="schema:givenName" content="Tudor"/>
                     <meta property="schema:additionalName" content="Gabriel"/>
                     <span property="schema:name">Tomescu Tudor-Gabriel</span>
                        </span>
                    </li>
                    <li typeof="sa:ContributorRole" property="schema:author">
                        <span typeof="schema:Person">
                     <meta property="schema:familyName" content="Pînzariu"/>
                     <meta property="schema:givenName" content="Mălina"/>
                     <meta property="schema:additionalName" content="Ioana"/>
                     <span property="schema:name"> Pînzariu Mălina-Ioana</span>
                        </span>
                    </li>
                </ul>
            </div>
        </section>
       
        <section id="introduction" role="doc-introduction">
            <h2 id="introduction">Introducere</h2>
            <h3 id="product scope">Scopul jocului </h3>
            <p id="domeniu">Site-ul se încadrează în domeniul matematic, el furnizează exerciții matematice din domeniile algebră , geometrie , trigonometrie si analiză.</p>
            <p id="scop-products">MEGa-Math-Equation-Game este un site creat cu scopul de a ajuta elevii din clasele primare să iși verifice cunoștiițele legate de matematică.</p>
            <p id="obiective"></p>
        </section>

        <section typeof="sa:MaterialsAndMethods">
            <h2>Descriere de ansamblu</h2>
            <h3 id="overall">Functionalitățile jocului</h3>
            <p>Aplicația pune la dispoziție utilizatorului diverse funcții, precum crearea unui cont, logarea în aplicație, și exercițiile propriu-zise, care pot fi accesate de un utilizator
                atât logat, cât și nelogat. </p>
            <h3 id="users">Utilizatori și caracteristici</h3>
            <p>Jocul este construit în așa fel încât utilizatorii, copii ce se află la școala primară , dar și copii cu o vârstă mai mare, să fie atrași de interfața cu tematică matematică.</p>
            <p>Utilizatorii se împart în două categorii: cei fără cont, nelogați, și cei care au cont în aplicatie, logați.</p>
            </section>

        <section>
            <h2>Diagrama UML</h2>
        <img src="Images/UMLdiagram.jpg" alt="" id="diagrama">
        </section>
        <section>
        <h2>Tehnologii utilizate</h2>
            <ul>
                <li id="html"><a href="https://en.wikipedia.org/wiki/HTML">HTML</a></li>
                <li id="css"><a href="https://en.wikipedia.org/wiki/CSS">CSS</a></li>
                <li id="php"><a href="https://www.php.net/">PHP</a></li>
                <li id="mySQL"><a href="https://www.mysql.com/">MySQL</a></li>
            </ul>
            <h2 id="page_description">Caracteristici interfață</h2>
            <h4 id="general_description">Descriere generală</h4>
            <ul>
                <li>
                    <p>Pagina principală - Homepage: conține un meniu ce contine : pagina de exercitii , pagina cu quiz , pagina cu ghicitori , pagina documentatiei , pagina de login si pagina de inregistrare</p>
                </li>
                <li>
                    <p>Paginile contului - Login, Register: sunt destinate pentru logarea utilizatorului și crearea unui cont nou.</p>
                </li>
                <li>
                    <p>Pagina exercitiilor - Aici se vor putea rezolva exercitiile pe diferite domenii matematice. </p>
                </li>
                <li>
                    <p>Pagina quiz-ului - Quiz: contine intrebari din scoala primara.</p>
                </li>
                <li>
                    <p>Pagina Riddle - Riddle: conține ghicitori matematice.</p>
                </li>
                <li>
                    <p>Pagina adminului - Admin: de aici se vor putea șterge conturi din baza de date și se va putea da export la un fișier csv ce va contine exercitii.</p>
                </li>
            </ul>

            <h2 id="general_description">Descriere functionalități</h2>
            <ul>
                <li>
                    <h5 id="register">Funcția Creare cont</h5>
                    <p>Site-ul web pune la dispoziție o pagină pentru crearea unui cont. Contul se creează pe baza unui formular. </p>
                </li>
                <li>
                    <h5 id="login">Funcția de logare</h5>
                    <p>Pagina de logare se adresează utilizatorilor care dețin deja un cont. În urma logării, se va modifica meniul pe baza rolului pe care il are. Acesta va putea accesa pagina de exercitii si va putea sa le rezolve sau va putea adauga exercitii.</p>
                </li>
                <li>
                    <h5 id="games">Functionalitățile jocurilor</h5>
                    <p>Exercițiile propriu-zise sunt afișate iar utilizatorul va putea răspunde la toate exercițiile deodată. După trimiterea răspunsului se va afișa numărul de întrebări la care a răspuns corect utilizatorul.</p>
                    <p>Quiz game este un test pentru copii ce se află la școala primară și conține 5 întrebări, care sunt evaluate după submit.</p>
                </li>
                <li>
                    <h5 id="games">Interfața software</h5>
                    <p>Aplicația comunică cu o bază de date MySQL, din care extragem/inserăm informațiile de care avem nevoie. </p>
                </li>
            </ul>
        </section>
        <section typeof="sa:MaterialsAndMethods">
            <h2 id="requirements"> Caracteristici </h2>
            <h3 id="design">Generarea de exerciții</h3>
            <p>Jucătorul primește exercițiile selectând domeniul preferat : algebră , geometrie , trigonometrie sau analiză.</p>
            <p>Jucătorul tastează răspunsul gândit pentru fiecare problemă, după care va primi ca răspuns numărul de probleme la care a răspuns corect.</p>
            
            <h2 id="design">Descriere funcționalități backend</h2>
            <h5>Register</h5>
            <p>Pentru funcția de înregistrare folosim un formular în HTML pentru a prelua datele utilizatorului si a le modela în PHP. Apoi în PHP deschidem o conexiune în baza de date, extragem datele din formular, creează un querry și le adaugă în baza de date, apoi răspunde clientului.  </p>
           
            <h5>Login</h5>
            <p>Pentru funcția de logare folosim un formular în HTML pentru a prelua datele utilizatorului, apoi verificăm dacă utilizatorul a completat formularul de logare si verificam daca se află în baza de date. Aici verificăm dacă utilizatorul este admin și îi dăm drept de admin. Apoi redirecționăm către homepage. </p>
            
            <h5>Funcțiile adminului</h5>
            <p>Adminul are propria sa interfață de unde poate exercita comenzi asupra bazei de date: poate adăuga exerciții ca toți userii (completând un formular sau prin upload csv) dar , în plus față de utilizatorii normali , acesta poate șterge conturi si poate face download la un fișier csv ce conține exerciții dintr-un anumit domeniu. </p>
           
            <h5>Implementarea exercițiilor</h5>
            <p>Exercițiile sunt preluate din baza de date corespunzătoare categoriei specifice. Utilizatorii vor putea adăuga exerciții completând un formular sau făcând upload la un fișier csv.</p>
        
            <h5>Verificarea răspunsului</h5>
            <p>După ce datele introduse in formular au fost trimise către server , acestea se preiau și se verifică cu rezultatul din baza de date , astfel modificând numărul de răspunsuri corecte și afișându-l la final.</p>  

            <h5>Quiz game</h5>
            <p>Quiz-ul reprezintă un test de inteligență matematică. Este creat într-un formular, iar răspunsul este trimis în PHP pentru validare. PHP-ul în urma validării, va afisa cate intrebari au avut raspunsul corect.</p>
        
        </section>



        <section typeof="sa:MaterialsAndMethods" id="sarcini">
            <h2 class="title-container">Sarcini</h2>
            <ul>
                <p>- Cazacu Răzvan-Nicușor : Documentație , Homepage , Admin page</p>
                <p>- Tomescu Tudor-Gabriel : Login , Adăugare ecuații , Quiz</p>
                <p>- Pînzariu Mălina-Ioana : Register , Exerciții , Riddle</p>
            </ul>
        </section>
        
        <section typeof="sa:MaterialsAndMethods" id="Bibliografia">
            <h2 id="product-references" typeof="schema:ReferenceList">Referințe</h2>
            <ol>
                <li typeof="schema:ScholarlyArticle" resource="https://profs.info.uaic.ro/~busaco/teach/courses/web/web-projects.html">
                    <span property="schema:author" typeof="schema:Person">
                    <span property="schema:familyName">Buraga</span>
                    <span property="schema:givenName">Sabin</span>
                    <span property="schema:additionalName">Corneliu</span>
                    </span>
                    <cite property="schema:citation"><a href="https://profs.info.uaic.ro/~busaco/teach/courses/web/web-projects.html">Site-ul materiei Tehnologii Web</a>.</cite>
                </li>
                <li typeof="schema:ScholarlyArticle" resource="https://www.w3schools.com">
                    <cite property="schema:citation"><a href="https://www.w3schools.com">https://www.w3schools.com</a>.</cite>
                </li>
                <li typeof="schema:ScholarlyArticle" resource="https://stackoverflow.blog/">
                    <cite property="schema:citation"><a href="https://stackoverflow.blog/">https://stackoverflow.blog/</a>.</cite>
                </li>
                <li typeof="schema:ScholarlyArticle" resource="https://www.php.net/">
                    <cite property="schema:citation"><a href="https://www.php.net/">https://www.php.net/</a>.</cite>
                </li>
                <li typeof="schema:ScholarlyArticle" resource="https://creately.com/">
                    <cite property="schema:citation"><a href="https://creately.com/">https://creately.com/</a>.</cite>
                </li>
            </ol>
        </section>
        <footer>
        <div class="footer">
        <p>Proiect realizat de Tomescu Tudor-Gabriel, Cazacu Răzvan-Nicușor și Pînzariu Mălina-Ioana</p>
      </div>
    </footer>
</article>
</body>
</html>