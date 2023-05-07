<?php 

    class Sexe extends CI_Model
    {
        private $id;
        private $sexe;
    
        public function setid($id){
            $this->id = $id;
        }
        public function getid(){
            return $this->id;
        }
        public function setsexe($sexe){
            $this->sexe = $sexe;
        }
        public function getsexe(){
            return $this->sexe;
        }

        public function liste(){
            $requete="select * from Sexe";
            $query=$this->db->query($requete);
            return $query->result_array();
        }
    }
?>