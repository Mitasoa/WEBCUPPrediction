<?php 

    class Sentiment extends CI_Model
    {
        public function liste(){
            $requete="select * from sentiment";
            $query=$this->db->query($requete);
            return $query->result_array();
        }
    }
?>