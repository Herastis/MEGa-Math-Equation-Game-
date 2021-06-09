<?php
if(isset($_POST['submit'])){
    $db = mysqli_connect('localhost', 'root', '', 'MEGa');

    $categ = $_POST['submit'];
    
    $q1 = $_POST["1"];
    $q2 = $_POST["2"];
    $q3 = $_POST["3"];
    $q4 = $_POST["4"];

    $i=0;
    $query = "SELECT raspuns FROM $categ ";
    $result = mysqli_query($db, $query);
    $score = 0;
    $quiz = [];
    $row_cnt=mysqli_num_rows($result);
    if($row_cnt>0){
        while($row = mysqli_fetch_assoc($result)){
            $quiz[$i]=$row["raspuns"];
            $i= $i + 1;
        }
    }else{
        echo "<script>
                alert('No results found');
                window.location.href='algebragame.php';
                </script>";
    }

    if($quiz[0]==$q1){
        $score = $score +1;
    }
    if($quiz[1]==$q2){
        $score = $score +1;
    }
    if($quiz[2]==$q3){
        $score = $score +1;
    }
    if($quiz[3]==$q4){
        $score = $score +1;
    }
    echo "<script>
                alert('Ai raspuns corect la  $score din $row_cnt intrebari !');
                window.location.href='algebragame.php';
                </script>";
}
    
?>