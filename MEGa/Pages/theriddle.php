<?php
    class Riddle {
        private $id;
        private $enunt;
        private $raspuns;
        private $imagine;


        function __construct() {
            $this->id = 0;
            $this->enunt = "";
            $this->raspuns = '';
            $this->imagine = '';
        }

        public function setId($id) {
            $this->id = $id;
        }
        
        public function setEnunt($enunt){
            $this->enunt=$enunt;
        }

        public function setRaspuns($raspuns) {
            $this->raspuns = $raspuns;
        }
        public function setImagine($imagine){
            $this->imagine =$imagine;
    
        }
        public function getId() {
            return $this->id;
        }
        public function getEnunt(){
            return $this->enunt;
        }

        public function getRaspuns() {
            return $this->raspuns;
        }
        public function getImagine(){
            return $this->imagine;
    
        }
        
    }

    function getRiddle(){
        $conectare = mysqli_connect('localhost','root','','mega');
        if(!$conectare){
            die(mysqli_connect_error());
        }
        $ex = [];
        $query = "SELECT * FROM riddle limit 1;";
        $results = mysqli_query($conectare, $query);
    
        while($result = $results->fetch_array()){
            $exercise = new Riddle();
            $exercise->setId($result[0]);
            $exercise->setEnunt($result[1]);
            $exercise->setRaspuns($result[2]);
            $exercise->setImagine($result[3]);
            $ex[] = $exercise;
        }
        return $ex;
    }

?>