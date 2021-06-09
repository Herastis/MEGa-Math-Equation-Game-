<?php
    $db = mysqli_connect('localhost', 'root', '', 'MEGa');
    
    if(isset($_POST['submitexercise'])){
        $categorie=$_POST['categorie'];
        $ecuatie=$_POST['ecuatie'];
        $raspuns=$_POST['raspuns'];
    
    
    if (strcmp($categorie,"algebra")!=0 && strcmp($categorie,"geometrie")!=0 && strcmp($categorie,"trigonometrie")!=0 && strcmp($categorie,"analiza"!=0)){
        echo "<script>
        alert('Categorie incorecta !');
        window.location.href='adaugaecuatii.php';
        </script>";
    }
    else
    {
        $query = "INSERT INTO  $categorie (categorie, ecuatie, raspuns,utilizat) 
  			  VALUES('$id','$categorie', '$ecuatie', '$raspuns' , 0)";
  	    mysqli_query($db, $query);
  	    header('location: homepage.php');}
    }
?>  
