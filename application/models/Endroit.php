<?php 

    class Endroit extends CI_Model
    {
        private $id;
        private $endroit;
    
        public function setid($id){
            $this->id = $id;
        }
        public function getid(){
            return $this->id;
        }
        public function setendroit($endroit){
            $this->endroit = $endroit;
        }
        
        public function liste(){
            $requete="select * from endroit";
            $query=$this->db->query($requete);
            return $query->result_array();
        }
    }
?>