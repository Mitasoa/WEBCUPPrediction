<?php 

    class Seance extends CI_Model
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
        public function listeseance(){
            $requete="select * from seance";
            $query=$this->db->query($requete);
            return $query->result_array();

        }
    }
?>