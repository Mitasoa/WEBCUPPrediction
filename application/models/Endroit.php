<?php 

    class Endroit extends CI_Model
    {
        public function liste(){
            $requete="select * from endroit";
            $query=$this->db->query($requete);
            return $query->result_array();
        }
    }
?>