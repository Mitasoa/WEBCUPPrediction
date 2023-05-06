<?php 

    class RevePersonne extends CI_Model
    {
        public function insert($idrevedescription, $idsexe, $idnombre){
            $requete = "insert into revepersonne values (default,%s,%s,%s)";
            $requete = sprintf($requete, $idrevedescription, $idsexe, $idnombre);
            $this->db->query($requete);
        }
    }
?>