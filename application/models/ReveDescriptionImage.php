<?php 

    class ReveDescriptionImage extends CI_Model
    {

        public function insert($idrevedescription, $idimageendroit){
            $requete = "insert into revedescriptionimage(idrevedescription,idimageendroit) values (%s,%s)";
            $requete = sprintf($requete, $idrevedescription, $idimageendroit);
            $this->db->query($requete);
        }
    }
?>