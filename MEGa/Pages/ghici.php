<?php
    include ('theriddle.php');
    
    $answer = $_GET['categ'];
    $conectare = mysqli_connect('localhost','root','','mega');
    if(!$conectare){
        die(mysqli_connect_error());
    }
    $ex = [];
    $query = "SELECT * FROM riddle;";
    $results = mysqli_query($conectare, $query);
    $row_cnt=mysqli_num_rows($results);
    if($answer>=$row_cnt)
        $answer = 0;

    $query = "SELECT * FROM riddle where id>$answer limit 1;";
    $results = mysqli_query($conectare, $query);
    
    while($result = $results->fetch_array()){
        $exercise = new Riddle();
        $exercise->setId($result[0]);
        $exercise->setEnunt($result[1]);
        $exercise->setRaspuns($result[2]);
        $exercise->setImagine($result[3]);
        $ex[] = $exercise;
    }
    foreach($ex as $sth) {
        echo "
        <div class='elements'>
                <img class='r-image' src='".$sth->getImagine()."'  alt='riddle'>
                <div class='enunt'><p>".$sth->getEnunt()."</p></p></div>
        </div>
        <div class='hidden'>
            <button class='btn' onclick='myTogglebtn()'>Vezi raspuns</button>
                    <h2 class='raspuns' id='raspuns'>
                    ".$sth->getRaspuns()."
                    </h2>
        </div>
        <div class='next-btn'>
            <button class='btn' id='next' onclick='next()' value='".$sth->getId()."'>Urmatoare</button>
        </div>"
        ;
        
    }
?>