<?php 

    class TypeReve extends CI_Model
    {
        private $id;
        private $type;
    
        public function setid($id){
            $this->id = $id;
        }
        public function getid(){
            return $this->id;
        }
        public function settype($type){
            $this->type = $type;
        }
        
        public function liste(){
            $requete="select * from typereve";
            $query=$this->db->query($requete);
            return $query->result_array();
        }
    }
?>