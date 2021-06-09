<?php
    class Gameseq {
        private $id;
        private $categorie;
        private $ecuatie;
        private $raspuns;
        private $utilizat;

        function __construct() {
            $this->id = 0;
            $this->categorie = "";
            $this->ecuatie = "";
            $this->raspuns = 0;
            $this->utilizat = 0;
        }

        public function setId($id) {
            $this->id = $id;
        }
        
        public function setCategorie($categorie){
            $this->categorie=$categorie;
        }

        public function setEcuatie($ecuatie) {
            $this->ecuatie = $ecuatie;
        }
        public function setRaspuns($raspuns) {
            $this->raspuns = $raspuns;
        }
        public function setUtilizat($utilizat){
            $this->utilizat =$utilizat;
    
        }
        public function getId() {
            return $this->id;
        }
        
        public function getCategorie(){
            return $this->categorie;
        }

        public function getEcuatie() {
            return $this->ecuatie;
        }
        public function getRaspuns() {
            return $this->raspuns;
        }
        public function getUtilizat(){
            return $this->utilizat;
    
        }
    }
    function getAlgebra(){
        $conectare = mysqli_connect('localhost','root','','mega');
        if(!$conectare){
            die(mysqli_connect_error());
        }
       $ex = [];
        $query = "SELECT * FROM algebra where utilizat=0 limit 4;";
        $results = mysqli_query($conectare, $query);
    
        while($result = $results->fetch_array()){
            $exercise = new Gameseq();
            $exercise->setId($result[0]);
            $exercise->setCategorie($result[1]);
            $exercise->setEcuatie($result[2]);
            $exercise->setRaspuns($result[3]);
            $exercise->setUtilizat($result[4]);
            $ex[] = $exercise;
        }
        return $ex;
    }
    function getGeometry(){
        $conectare = mysqli_connect('localhost','root','','mega');
        if(!$conectare){
            die(mysqli_connect_error());
        }
       $quiz = [];
        $query = "SELECT * FROM geometrie where utilizat=0 limit 4;";
        $results = mysqli_query($conectare, $query);
        
        while($result = $results->fetch_array()){
            $exercise = new Gameseq();
            $exercise->setId($result[0]);
            $exercise->setCategorie($result[1]);
            $exercise->setEcuatie($result[2]);
            $exercise->setRaspuns($result[3]);
            $exercise->setUtilizat($result[4]);
            $quiz[] = $exercise;

        }
        return $quiz;
        
    }
    function getTrigon(){
        $conectare = mysqli_connect('localhost','root','','mega');
        if(!$conectare){
            die(mysqli_connect_error());
        }
       $ex = [];
        $query = "SELECT * FROM trigonometrie where utilizat=0 limit 4;";
        $results = mysqli_query($conectare, $query);
    
        while($result = $results->fetch_array()){
            $exercise = new Gameseq();
            $exercise->setId($result[0]);
            $exercise->setCategorie($result[1]);
            $exercise->setEcuatie($result[2]);
            $exercise->setRaspuns($result[3]);
            $exercise->setUtilizat($result[4]);
            $ex[] = $exercise;
        }
        return $ex;
    }
    function getAnaliza(){
        $conectare = mysqli_connect('localhost','root','','mega');
        if(!$conectare){
            die(mysqli_connect_error());
        }
       $ex = [];
        $query = "SELECT * FROM analiza where utilizat=0 limit 4;";
        $results = mysqli_query($conectare, $query);
    
        while($result = $results->fetch_array()){
            $exercise = new Gameseq();
            $exercise->setId($result[0]);
            $exercise->setCategorie($result[1]);
            $exercise->setEcuatie($result[2]);
            $exercise->setRaspuns($result[3]);
            $exercise->setUtilizat($result[4]);
            $ex[] = $exercise;
        }
        return $ex;
    }
?>