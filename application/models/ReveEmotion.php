<?php 

    class ReveEmotion extends CI_Model
    {

        public function insert($idrevedescription, $idsentiment){
            $requete = "insert into reveemotion(id,idrevedescription,idsentiment) values (default,%s,%s)";
            $requete = sprintf($requete, $idrevedescription, $idsentiment);
            $this->db->query($requete);
        }
    }
?>