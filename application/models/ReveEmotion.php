<?php 

    class ReveEmotion extends CI_Model
    {

        public function insert($idrevedescription, $idsentiment){
            $requete = "insert into reveemotion(idrevedescription,idsentiment) values (%s,%s)";
            $requete = sprintf($requete, $idrevedescription, $idsentiment);
            $this->db->query($requete);
        }
    }
?>