<?php 

    class RevePersonne extends CI_Model
    {
        public function insert($idrevedescription, $idsexe, $nombre){
            $requete = "insert into revepersonne(idrevedescription,idsexe,nombre) values (%s,%s,%s)";
            $requete = sprintf($requete, $idrevedescription, $idsexe, $nombre);
            $this->db->query($requete);
        }
    }
?>