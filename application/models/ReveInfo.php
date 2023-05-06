<?php

class ReveInfo extends CI_Model
{
    public function listereve($id)
    {
        $requete = "SELECT * FROM listereve where idutilisateur=".$id;
        $requete = $this->db->query($requete);
        return $requete->result_array();
    }
    public function listerevedescription($id){

        $requete = "SELECT * FROM listerevedescription where id=".$id;
        $requete = $this->db->query($requete);
        return $requete->result_array();
    }
}
?>