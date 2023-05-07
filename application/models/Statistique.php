<?php 

    class Statistique extends CI_Model
    {
        public function sexe_typereve(){
            $requete="select * from statistique_sexe_typereve";
            $query=$this->db->query($requete);
            return $query->result_array();
        }

        public function evaluation_typereve(){
            $requete="select * from statistique_evaluation_typereve";
            $query=$this->db->query($requete);
            return $query->result_array();
        }
    }
?>