<?php
    $db = mysqli_connect('localhost', 'root', '', 'MEGa');
    
    if(isset($_POST['submitexercisecsv']))
    {
        $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel');
        //verificare .csv
        if(!empty($_FILES['fileToUpload']['name']) && in_array($_FILES['fileToUpload']['type'], $csvMimes))
        {
            //daca am facut upload la fisier
            if(is_uploaded_file($_FILES['fileToUpload']['tmp_name']))
            {
            // deschidem fisierul in read-only mode
            $csvFile = fopen($_FILES['fileToUpload']['tmp_name'], 'r');
            // sar peste prima linie
            fgetcsv($csvFile);
            
            // parsez datele din csv
            while(($line = fgetcsv($csvFile,50000,",")) !== FALSE){
                // luam datele din linie
                $id =mysqli_real_escape_string($db,$line[0]);
                $categorie   = mysqli_real_escape_string($db,$line[1]);
                $ecuatie  = mysqli_real_escape_string($db,$line[2]);
                $raspuns  = mysqli_real_escape_string($db,$line[3]);

                $prevquery="SELECT * FROM $categorie WHERE ecuatie='$ecuatie'";
                $result = mysqli_query($db,$prevquery); 
                $row_cnt = mysqli_num_rows($result);
                if($row_cnt !=0){
                    echo "<script>
                alert('Ecuatia $ecuatie este deja in bd ! Am facut upload la cele ce nu se gasesc in bd !');
                window.location.href='adaugaecuatii.php';
                </script>";
                }
                else{
                $query="INSERT INTO $categorie (id,categorie,ecuatie,raspuns,utilizat) VALUES ('$id','$categorie', '$ecuatie', '$raspuns',0) ";
                mysqli_query($db, $query);
                echo "<script>
                alert('Ai introdus datele din csv cu succes !');
                window.location.href='adaugaecuatii.php';
                </script>";}
            }
            fclose($csvFile);
            }
        }else{
        echo "<script>
                alert('Nu ai introdus un fisier csv !');
                window.location.href='adaugaecuatii.php';
                </script>";}
    }
?>  
