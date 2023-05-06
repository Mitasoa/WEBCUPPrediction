<?php 

    class Sexe extends CI_Model
    {
        private $id;
        private $nom;
    
        public function setid($idlogin){
            $this->id = $idlogin;
        }
        public function getid(){
            return $this->id;
        }
        public function setnom($nom){
            $this->nom = $nom;
        }
        public function getnom(){
            return $this->nom;
        }
        public function listesexe(){
            $requete="select * from Sexe";
            $query=$this->db->query($requete);
            return $query->result_array();

        }
    }
?>