<?php

class EvaluationPrediction extends CI_Model
{
    private $id;
    private $idreve;
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
    public function setidreve($idlogin)
    {
        $this->idreve = $idlogin;
    }
    public function getidreve()
    {
        return $this->idreve;
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
    public function insererEvaluationPrediction()
    {
        $sql = "INSERT INTO evaluationprediction values (default," . $this->db->escape($this->getidreve()) . "," . $this->db->escape($this->getetoile()) . "," . $this->db->escape($this->getcommentaire()) . ")";
        $this->db->query($sql);
    }
}
?>