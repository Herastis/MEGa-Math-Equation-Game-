<?php
    $db = mysqli_connect('localhost', 'root', '', 'MEGa');
    $categorie=$_POST['categorie'];
    if(isset($_POST["Export"])){
        if (strcmp($categorie,"algebra")!=0 && strcmp($categorie,"geometrie")!=0 && strcmp($categorie,"trigonometrie")!=0 && strcmp($categorie,"analiza")!=0){
            echo "<script>
            alert('Categorie incorecta !');
            window.location.href='exportecuatii.php';
            </script>";
        }else { 
        header('Content-Type: text/csv; charset=utf-8');  
        header('Content-Disposition: attachment; filename=Ecuatii.csv');  
        $output = fopen("php://output", "w");  
        fputcsv($output, array('id', 'categorie', 'ecuatie', 'raspuns', 'utilizat'));  
        $query = "SELECT * from $categorie ORDER BY id ASC";  
        $result = mysqli_query($db, $query);  
        while($row = mysqli_fetch_assoc($result))  
        {  
             fputcsv($output, $row);  
        }  
        fclose($output); 
    }
    }
?>