<?php

class Appreciation extends CI_Model
{
    private $id;
    private $etoile;
    private $commentaire;

    public function setid($idlogin)
    {
        $this->id = $idlogin;
    }
    public function getid()
    {
        return $this->id;
    }
    public function setetoile($idetoile)
    {
        $this->etoile = $idetoile;
    }
    public function getetoile()
    {
        return $this->etoile;
    }
    public function setcommentaire($idlogin)
    {
        $this->commentaire = $idlogin;
    }
    public function getcommentaire()
    {
        return $this->commentaire;
    }
    public function insererAppreciation()
    {
        $sql = "INSERT INTO appreciation values (default," . $this->db->escape($this->getetoile()) . "," . $this->db->escape($this->getcommentaire()) . ")";
        $this->db->query($sql);
    }
}
?>