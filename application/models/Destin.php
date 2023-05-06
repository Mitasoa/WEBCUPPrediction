<?php

class Destin extends CI_Model
{
    private $id;
    private $photoillustration;
    private $destin;

    public function setid($idlogin)
    {
        $this->id = $idlogin;
    }
    public function getid()
    {
        return $this->id;
    }
    public function setphotoillustration($idphotoillustration)
    {
        $this->photoillustration = $idphotoillustration;
    }
    public function getphotoillustration()
    {
        return $this->photoillustration;
    }
    public function setdestin($idlogin)
    {
        $this->destin = $idlogin;
    }
    public function getdestin()
    {
        return $this->destin;
    }
    public function genererdestin()
    {
        $requete = "SELECT * FROM destin ORDER BY RAND() LIMIT 1";
        $requete = $this->db->query($requete);
        $requete = $requete->result_array();
        foreach ($requete as $key) {
            $data['id'] = $key['id'];
            $data['photoillustration'] = $key['photoillustration'];
            $data['destin'] = $key['destin'];
        }
        return $data;
    }
}
?>